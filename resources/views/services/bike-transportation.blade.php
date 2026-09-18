@extends('layouts.app')

@section('content')

    <x-services.page-title title="Bike Transportation Services in Bihar & Jharkhand" crumb="Bike Transportation" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!--Start Services Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    <x-services.sidebar current="bike-transportation" />
                </div>
                <!--End Services Details Sidebar-->

                <!--Start Services Details Content-->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <img class="w-100" src="{{ public_url('images/services/bike-transport.png') }}"
                            alt="Motorcycle professionally packed and crated for bike transportation" width="476"
                            height="378">

                        <div class="h3 mt-4">Bike Transportation, Packed and Handled Properly</div>
                        <p>A motorcycle or scooter takes a different kind of care than furniture — it needs to be
                            drained, protected at the right points, and secured upright so it doesn't shift during
                            transit. MoveSmartPlus offers bike transportation across Bihar and Jharkhand with pickup
                            from your home, proper packing, and doorstep delivery at the other end.</p>
                        <p>Every bike is inspected before packing and again at delivery, so both you and we have a
                            shared record of its condition, panels and existing marks before it leaves your hands.</p>

                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">Inspection and Packing</div>
                                <p>Before packing, we note your bike's existing scratches, dents and odometer reading
                                    with you present. The tank is drained as required, and the bike is wrapped and
                                    crated to protect the body, mirrors and handlebars during transit.</p>
                                <blockquote class="blockquote-one">Mirrors, indicators and other protruding parts are
                                    wrapped separately before the bike is crated, so they aren't the first thing to
                                    take an impact in transit.</blockquote>
                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="{{ public_url('images/services/page/loading.png') }}"
                                            alt="Bike being wrapped and packed before transportation" loading="lazy">
                                        <p>The bike is wrapped in protective material and secured in a crate or on a
                                            stand designed to keep it upright and stable through the journey.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="{{ public_url('images/services/page/unloading.png') }}"
                                            alt="Bike being loaded onto a transport vehicle" loading="lazy">
                                        <p>At delivery, the bike is unpacked at your doorstep and checked against the
                                            pickup inspection with you present before handover.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Pickup and Delivery at Your Doorstep</div>
                            <p>You don't need to drop your bike off anywhere — our team collects it from your home,
                                and delivers it to your new address once transit is complete. This applies whether
                                you're relocating within Bihar and Jharkhand or moving your bike on its own.</p>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Why Choose MoveSmartPlus for Bike Transportation</div>
                            <p>We treat a two-wheeler with the same documented inspection and careful packing we use
                                for cars, at a price scaled to a smaller vehicle. You know upfront what the transport
                                will cost and get a written record of your bike's condition at both ends of the trip.</p>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Related Services</div>
                            <p>Transporting a car at the same time? See our
                                <a href="{{ route('services.car-transportation') }}">car transportation</a> service.
                                Relocating your whole home too? Check our
                                <a href="{{ route('services.home-shifting') }}">home shifting</a> service.</p>
                        </div>

                        <x-services.faq :items="[
                            [
                                'q' => 'How much does bike transportation cost?',
                                'a' => 'Cost depends on the distance between pickup and delivery cities and the type of bike. We confirm a fixed price once you share these details.',
                            ],
                            [
                                'q' => 'How is a bike packed for transportation?',
                                'a' => 'The bike is inspected, the fuel tank is drained as required, and vulnerable parts like mirrors and indicators are wrapped before the bike is crated or secured on a stand for transit.',
                            ],
                            [
                                'q' => 'How long does bike transportation take?',
                                'a' => 'Transit time depends on the distance between cities. We share an estimated delivery window at the time of booking.',
                            ],
                            [
                                'q' => 'Do you provide pickup from my home?',
                                'a' => 'Yes, we collect the bike from your home address and deliver it to your doorstep at the destination.',
                            ],
                            [
                                'q' => 'What documents are required?',
                                'a' => 'You will need the bike registration certificate (RC), a valid ID proof, and the insurance copy at the time of pickup.',
                            ],
                            [
                                'q' => 'How is the bike inspected?',
                                'a' => 'Our team records existing scratches, dents and the odometer reading before packing, and checks the bike against the same record with you present at delivery.',
                            ],
                        ]" heading="Frequently Asked Questions"
                            intro="Common questions about transporting a bike with MoveSmartPlus." />

                        <div class="mt-40 text-center">
                            <a href="{{ url('/') }}" class="theme-btn btn-style-four me-2 mb-2"><span
                                    class="btn-title">Get a Free Bike Transportation Quote</span></a>
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
