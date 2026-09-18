<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminActivityLog;
use App\Models\Booking;
use App\Models\BookingStatusHistory;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public const STATUSES = [
        'Pending',
        'Quote Generated',
        'Assigned',
        'Confirmed',
        'In Transit',
        'Delivered',
        'Cancelled',
    ];

    public function index(Request $request)
    {
        $bookings = Booking::with(['pickupCity', 'destinationCity'])
            ->when($request->filled('type'), fn ($q) => $q->where('relocation_type', $request->type))
            ->when($request->filled('status'), fn ($q) => $q->where('status', $request->status))
            ->when($request->filled('date_from'), fn ($q) => $q->whereDate('created_at', '>=', $request->date_from))
            ->when($request->filled('date_to'), fn ($q) => $q->whereDate('created_at', '<=', $request->date_to))
            ->when($request->filled('search'), function ($q) use ($request) {
                $term = $request->search;
                $q->where(function ($q) use ($term) {
                    $q->where('customer_name', 'like', "%{$term}%")
                        ->orWhere('booking_no', 'like', "%{$term}%")
                        ->orWhere('phone', 'like', "%{$term}%");
                });
            })
            ->latest()
            ->paginate(25)
            ->withQueryString();

        return view('admin.bookings.index', [
            'bookings' => $bookings,
            'statuses' => self::STATUSES,
            'filters' => $request->only(['type', 'status', 'date_from', 'date_to', 'search']),
        ]);
    }

    public function show(Booking $booking)
    {
        $booking->load(['pickupCity', 'destinationCity', 'inventoryItems.category']);

        $history = BookingStatusHistory::where('booking_id', $booking->id)
            ->orderByDesc('changed_at')
            ->get();

        return view('admin.bookings.show', [
            'booking' => $booking,
            'history' => $history,
            'statuses' => self::STATUSES,
        ]);
    }

    public function updateStatus(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => ['required', 'in:' . implode(',', self::STATUSES)],
        ]);

        $oldStatus = $booking->status;
        $newStatus = $request->status;

        if ($oldStatus !== $newStatus) {
            $booking->update(['status' => $newStatus]);

            BookingStatusHistory::create([
                'booking_id' => $booking->id,
                'old_status' => $oldStatus,
                'new_status' => $newStatus,
                'changed_at' => now(),
            ]);

            AdminActivityLog::record(
                "Changed booking #{$booking->booking_no} status from {$oldStatus} to {$newStatus}",
                $booking->booking_no
            );
        }

        return back()->with('success', 'Booking status updated.');
    }
}
