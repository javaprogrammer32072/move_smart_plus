@extends('layouts.app')

@section('content')

    <x-page-title title="How We Move You" crumb="Timeline" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <div class="h3">Our Relocation Process</div>
                    <p>Every move follows the same process, whether it's a single room across town or a full
                        household or office move across state lines. Here's what happens from your first enquiry to
                        the day we finish unloading.</p>

                    @php
                        $steps = [
                            ['title' => 'Contact / Enquiry', 'text' => 'You reach out through our website, phone or email with what you need to move and where.'],
                            ['title' => 'Requirement Discussion', 'text' => 'A move coordinator discusses your requirements — what needs to move, the addresses involved, and your preferred dates.'],
                            ['title' => 'Estimate / Quote', 'text' => 'Based on the volume of goods, distance and any additional services, we share a written, fixed quote before you book.'],
                            ['title' => 'Booking Confirmation', 'text' => 'Once you confirm, your move is scheduled and you receive a booking confirmation with the agreed date and details.'],
                            ['title' => 'Packing', 'text' => 'Our crew packs your belongings with materials suited to each item, labelling boxes by room or category.'],
                            ['title' => 'Loading', 'text' => 'Packed items and furniture are loaded onto the vehicle, with heavier pieces moved using trolleys and proper technique.'],
                            ['title' => 'Transportation', 'text' => 'Your goods are transported to the destination address, whether within the same city or between cities.'],
                            ['title' => 'Delivery', 'text' => 'The vehicle arrives at your new address at the scheduled time, ready for unloading.'],
                            ['title' => 'Unloading', 'text' => 'Items are unloaded and placed as agreed, checked against the same inventory list taken at pickup.'],
                            ['title' => 'Final Support', 'text' => 'Your move coordinator remains available if you have questions once the move is complete.'],
                        ];
                    @endphp

                    <div class="row gy-4 mt-3">
                        @foreach ($steps as $index => $step)
                            <div class="col-md-6">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 fw-bold"
                                        style="width:48px;height:48px;border-radius:50%;background-color:var(--theme-color2);color:var(--theme-color2-text-color);">
                                        {{ $index + 1 }}
                                    </div>
                                    <div>
                                        <div class="h5 mb-1">{{ $step['title'] }}</div>
                                        <p class="mb-0">{{ $step['text'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="h3 mt-40">Ready to Start?</div>
                    <p>Every move begins with a quick conversation about what you need. Share your requirements and
                        we'll walk you through the estimate and booking steps above.</p>

                    <div class="mt-40 text-center">
                        <a href="{{ route('contact-us') }}" class="theme-btn btn-style-four me-2 mb-2"><span
                                class="btn-title">Get a Free Quote</span></a>
                        <a href="{{ route('services.index') }}" class="theme-btn btn-style-three mb-2"><span
                                class="btn-title">Explore Our Services</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
