@extends('layouts.app')

@section('content')

    <x-page-title title="Track Your Booking" crumb="Track Booking" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="h3">Check Your Booking Status</div>
                    <p>Enter the booking ID from your confirmation to see its current status.</p>

                    <form method="GET" action="{{ route('track-booking') }}" class="mt-4">
                        <div class="form-clt">
                            <label for="booking-no-input" class="visually-hidden">Booking ID</label>
                            <input type="text" id="booking-no-input" name="booking_no" value="{{ $bookingNo }}"
                                placeholder="e.g. MSP202609190001">
                            <button class="theme-btn btn-style-five" type="submit">Track Booking</button>
                        </div>
                    </form>

                    @if ($notFound)
                        <div class="alert alert-danger mt-4">
                            Booking not found — please check your ID and try again.
                        </div>
                    @endif

                    @if ($booking)
                        <div class="mt-40">
                            <div class="h3">Booking {{ $booking->booking_no }}</div>

                            <div class="row gy-3 mt-2">
                                <div class="col-md-6">
                                    <strong>Status:</strong> {{ $booking->status }}
                                </div>
                                <div class="col-md-6">
                                    <strong>Service Type:</strong> {{ $booking->relocation_type }}
                                </div>
                                <div class="col-md-6">
                                    <strong>Pickup City:</strong> {{ $booking->pickupCity->city_name ?? '—' }}
                                </div>
                                <div class="col-md-6">
                                    <strong>Destination City:</strong> {{ $booking->destinationCity->city_name ?? '—' }}
                                </div>
                                @if ($booking->moving_date)
                                    <div class="col-md-6">
                                        <strong>Moving Date:</strong> {{ $booking->moving_date->format('d M Y') }}
                                    </div>
                                @endif
                            </div>

                            @if ($history->isNotEmpty())
                                <div class="h3 mt-40">Status Timeline</div>
                                <ul class="list-unstyled">
                                    @foreach ($history as $entry)
                                        <li class="mb-3 pb-3" style="border-bottom:1px solid rgba(0,0,0,0.08);">
                                            <strong>{{ $entry->new_status }}</strong>
                                            <div style="color:var(--text-color);font-size:14px;">
                                                {{ $entry->changed_at->format('d M Y, h:i A') }}
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    @endif

                    <p class="mt-40">Can't find your booking ID? <a href="{{ route('contact-us') }}">Contact us</a>
                        and our team will help you.</p>

                </div>
            </div>
        </div>
    </section>

@endsection
