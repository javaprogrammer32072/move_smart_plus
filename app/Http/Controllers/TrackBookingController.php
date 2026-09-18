<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingStatusHistory;
use Illuminate\Http\Request;

class TrackBookingController extends Controller
{
    public function show(Request $request)
    {
        $bookingNo = trim((string) $request->query('booking_no', ''));
        $booking = null;
        $history = collect();
        $notFound = false;

        if ($bookingNo !== '') {
            // Looked up by the public booking number, never the internal
            // numeric id — this is exactly what the customer has on their
            // confirmation, and it can't be used to enumerate other bookings.
            $booking = Booking::with(['pickupCity', 'destinationCity'])
                ->where('booking_no', $bookingNo)
                ->first();

            if ($booking) {
                $history = BookingStatusHistory::where('booking_id', $booking->id)
                    ->orderBy('changed_at')
                    ->get();
            } else {
                $notFound = true;
            }
        }

        $seo = [
            'title' => 'Track Your Booking | MoveSmartPlus',
            'description' => 'Check the current status of your Move Smart Plus booking using your booking ID.',
            'robots' => 'noindex, follow',
        ];

        return view('track-booking', compact('booking', 'history', 'notFound', 'bookingNo', 'seo'));
    }
}
