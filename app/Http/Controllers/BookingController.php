<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingStepOneRequest;
use App\Services\BookingService;
use App\Models\InventoryCategory;
use App\Http\Requests\BookingInventoryRequest;
use App\Models\Booking;
use App\Mail\BookingConfirmationMail;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function index()
    {
        return view('booking.home');
    }

    public function store(BookingStepOneRequest $request)
    {
        $booking = $this->bookingService->createBooking($request);

        return redirect()->route(
            'booking.inventory',
            $booking->id
        );
    }

    public function inventory($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);

        $categories = InventoryCategory::with('items')
            ->where('status', 1)
            ->orderBy('display_order')
            ->get();

        return view('booking.inventory', compact(
            'booking',
            'categories'
        ));
    }
    public function saveInventory(BookingInventoryRequest $request, Booking $booking) {
        // print_r($booking);
        // print_r($request->all());die;
        $this->bookingService->saveInventory($booking, $request);
        $booking->load(['pickupCity', 'destinationCity', 'inventoryItems.category']);
        Mail::to('info@movesmartplus.com')->send(new BookingConfirmationMail($booking));
        return redirect()->route('booking.success', $booking->id)->with('success', 'Inventory saved successfully.');
    }
    public function success(Booking $booking)
    {
        return view(
            'booking.success',
            compact('booking')
        );
    }
}