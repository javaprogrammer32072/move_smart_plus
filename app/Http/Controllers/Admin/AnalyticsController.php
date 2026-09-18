<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function index(Request $request)
    {
        $from = $request->filled('from')
            ? \Carbon\Carbon::parse($request->from)
            : now()->subDays(29);

        $to = $request->filled('to')
            ? \Carbon\Carbon::parse($request->to)
            : now();

        $bookingsOverTime = Booking::selectRaw('DATE(created_at) as day, COUNT(*) as total')
            ->whereBetween('created_at', [$from->copy()->startOfDay(), $to->copy()->endOfDay()])
            ->groupBy('day')
            ->orderBy('day')
            ->get();

        $bookingsByStatus = Booking::selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        $bookingsByCity = Booking::selectRaw('pickup_city_id, COUNT(*) as total')
            ->whereNotNull('pickup_city_id')
            ->groupBy('pickup_city_id')
            ->orderByDesc('total')
            ->take(10)
            ->with('pickupCity')
            ->get()
            ->mapWithKeys(fn ($row) => [
                ($row->pickupCity->city_name ?? 'Unknown') => $row->total,
            ]);

        $contactsOverTime = Contact::selectRaw('DATE(created_at) as day, COUNT(*) as total')
            ->whereBetween('created_at', [$from->copy()->startOfDay(), $to->copy()->endOfDay()])
            ->groupBy('day')
            ->orderBy('day')
            ->get();

        $newsletterOverTime = NewsletterSubscription::selectRaw('DATE(subscribed_at) as day, COUNT(*) as total')
            ->whereBetween('subscribed_at', [$from->copy()->startOfDay(), $to->copy()->endOfDay()])
            ->groupBy('day')
            ->orderBy('day')
            ->get();

        return view('admin.analytics.index', [
            'bookingsOverTime' => $bookingsOverTime,
            'bookingsByStatus' => $bookingsByStatus,
            'bookingsByCity' => $bookingsByCity,
            'contactsOverTime' => $contactsOverTime,
            'newsletterOverTime' => $newsletterOverTime,
            'from' => $from->toDateString(),
            'to' => $to->toDateString(),
        ]);
    }
}
