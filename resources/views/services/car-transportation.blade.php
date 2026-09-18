@extends('layouts.app')

@section('content')

    <x-services.page-title title="Car Transportation Services in Bihar & Jharkhand" crumb="Car Transportation" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!--Start Services Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    <x-services.sidebar current="car-transportation" />
                </div>
                <!--End Services Details Sidebar-->

                <!--Start Services Details Content-->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <img class="w-100" src="{{ public_url('images/services/car-transport.png') }}"
                            alt="Car being loaded onto a carrier for professional car transportation" width="476"
                            height="378">

                        <div class="h3 mt-4">Car Transportation That Starts and Ends at Your Door</div>
                        <p>Driving your own car across cities takes a day or more, and it adds mileage and wear you
                            don't need before you've even settled into a new address. MoveSmartPlus offers car
                            transportation across Bihar and Jharkhand with door-to-door pickup and delivery, using
                            open and closed carriers, so you can relocate without also planning a separate road trip
                            for your vehicle.</p>
                        <p>Every vehicle is inspected before loading and again at delivery, and the booking includes
                            vehicle insurance, so both you and we have a shared record of your car's condition at
                            pickup and at handover.</p>

                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">Vehicle Inspection and Loading</div>
                                <p>Before your car is loaded, our team walks around it with you, notes existing
                                    scratches, dents or damage, and records the odometer reading. This report travels
                                    with your vehicle and is checked again at the destination.</p>
                                <blockquote class="blockquote-one">The same inspection checklist used at pickup is
                                    used again at delivery, so any change in your vehicle's condition is caught and
                                    recorded immediately, not disputed after the fact.</blockquote>
                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="{{ public_url('images/services/page/loading.png') }}"
                                            alt="Car being secured on a carrier before transportation" loading="lazy">
                                        <p>Your car is secured on the carrier with wheel straps and chocks so it stays
                                            in place for the full journey, regardless of road conditions.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="{{ public_url('images/services/page/unloading.png') }}"
                                            alt="Car being unloaded at delivery after transportation" loading="lazy">
                                        <p>At delivery, your car is unloaded at your address, inspected against the
                                            pickup report with you present, and handed over along with the
                                            documentation for the trip.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Door-to-Door Car Transportation</div>
                            <p>Pickup and delivery happen at the addresses you provide rather than a depot you have to
                                travel to, and you're kept informed of the vehicle's transit status until it reaches
                                you. This works for both intercity relocation and one-off vehicle transport within
                                Bihar and Jharkhand.</p>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Why Choose MoveSmartPlus for Car Transportation</div>
                            <p>We combine a documented inspection process, secured carrier loading, and included
                                vehicle insurance so a car transport booking doesn't leave you guessing about your
                                vehicle's condition or coverage in transit. Pricing is confirmed upfront based on the
                                distance and vehicle type.</p>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Related Services</div>
                            <p>Transporting a two-wheeler as well? See our
                                <a href="{{ route('services.bike-transportation') }}">bike transportation</a> service.
                                Relocating your whole household at the same time? Our
                                <a href="{{ route('services.home-shifting') }}">home shifting</a> and
                                <a href="{{ route('services.local-moving') }}">local moving</a> services can be
                                booked alongside your car transport.</p>
                        </div>

                        <x-services.faq :items="[
                            [
                                'q' => 'How much does car transportation cost?',
                                'a' => 'Cost depends on the distance between cities and the type of vehicle being transported. We confirm a fixed price after you share your pickup and delivery locations and vehicle details.',
                            ],
                            [
                                'q' => 'How is my car prepared for transportation?',
                                'a' => 'Your car is inspected, the fuel level and odometer reading are noted, and it is then loaded and secured on the carrier with wheel straps and chocks before transit.',
                            ],
                            [
                                'q' => 'How long does car transportation take?',
                                'a' => 'Transit time depends on the distance between the pickup and delivery cities. We share an estimated delivery window at the time of booking.',
                            ],
                            [
                                'q' => 'Do you provide door-to-door car transportation?',
                                'a' => 'Yes, pickup and delivery happen at the addresses you provide, so you do not need to drop off or collect your car from a depot.',
                            ],
                            [
                                'q' => 'What documents are required?',
                                'a' => 'You will need the vehicle registration certificate (RC), a valid ID proof, and the vehicle insurance copy at the time of pickup.',
                            ],
                            [
                                'q' => 'How is the vehicle inspected?',
                                'a' => 'Our team records existing scratches, dents and damage along with the odometer reading before loading, and repeats the same check with you present at delivery.',
                            ],
                        ]" heading="Frequently Asked Questions"
                            intro="Common questions about transporting a car with MoveSmartPlus." />

                        <div class="mt-40 text-center">
                            <a href="{{ url('/') }}" class="theme-btn btn-style-four me-2 mb-2"><span
                                    class="btn-title">Get a Free Car Transportation Quote</span></a>
                            <a href="tel:+917070784447" class="theme-btn btn-style-three mb-2"><span
                                    class="btn-title"><span class="fas fa-phone"></span> Call +91 7070 784 447</span></a>
                        </div>
                    </div>
                </div>
                <!--End Services Details Content-->
            </div>
        </div>
    </section>

@endsection
