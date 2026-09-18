<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\NewsletterSubscription;

class DashboardController extends Controller
{
    public function index()
    {
        $summary = [
            'bookings_today' => Booking::whereDate('created_at', today())->count(),
            'bookings_week' => Booking::where('created_at', '>=', now()->startOfWeek())->count(),
            'bookings_pending' => Booking::where('status', 'Pending')->count(),
            'contacts_new' => Contact::where('status', 'new')->count(),
            'newsletter_new' => NewsletterSubscription::where('created_at', '>=', now()->subDays(7))->count(),
        ];

        $recentBookings = Booking::with(['pickupCity', 'destinationCity'])
            ->latest()
            ->take(8)
            ->get();

        $recentContacts = Contact::latest()->take(8)->get();

        return view('admin.dashboard', compact('summary', 'recentBookings', 'recentContacts'));
    }
}
