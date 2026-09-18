@extends('layouts.app')

@section('content')

    <x-services.page-title title="Local Moving Services in Bihar & Jharkhand" crumb="Local Moving" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!--Start Services Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    <x-services.sidebar current="local-moving" />
                </div>
                <!--End Services Details Sidebar-->

                <!--Start Services Details Content-->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <img class="w-100" src="{{ public_url('images/services/local-moving.png') }}"
                            alt="Movers loading household furniture into a truck for a local move" width="476"
                            height="378">

                        <div class="h3 mt-4">Same-City Shifting, Done in a Day</div>
                        <p>Moving within the same city still means packing an entire household, getting it onto a
                            truck, and unpacking it somewhere new — the distance is shorter, but the work isn't.
                            MoveSmartPlus runs local moves as same-day shifts across Bhagalpur and other towns in
                            Bihar and Jharkhand, with a crew sized to your home so a one-bedroom flat and a full
                            independent house are both handled properly.</p>
                        <p>Because local moves are usually booked on shorter notice than intercity ones, we keep the
                            process simple: a quick walkthrough or a phone call to understand what needs to move, a
                            fixed quote, and a crew that packs, loads, transports and unloads in a single visit.</p>

                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">Packing and Furniture Handling</div>
                                <p>Local shifts still deserve proper packing — a short drive across town won't save a
                                    television or a glass cabinet from a bad jolt. Our crew wraps and boxes your
                                    belongings the same way they would for a longer move.</p>
                                <blockquote class="blockquote-one">Furniture is wrapped and padded before loading, and
                                    heavier pieces are moved with trolleys rather than carried, to avoid scuffs on
                                    stairways and doorframes at both ends.</blockquote>
                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="{{ public_url('images/services/page/loading.png') }}"
                                            alt="Packer wrapping household items before a local house shift"
                                            loading="lazy">
                                        <p>Cartons, wrapping and covers are brought on the day of the move, so you
                                            don't need to source packing material yourself before the crew arrives.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="{{ public_url('images/services/page/unloading.png') }}"
                                            alt="Movers loading and unloading furniture for a same-city shift"
                                            loading="lazy">
                                        <p>Loading and unloading is done with the same care regardless of distance,
                                            and boxes are placed room-by-room at your new address so unpacking is
                                            straightforward.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Small and Large Local Moves</div>
                            <p>Whether you're moving a single room, a full flat, or an independent house, local moves
                                are quoted based on what you actually own — the number of rooms, furniture pieces and
                                boxes — rather than a flat citywide rate. That keeps smaller moves affordable and
                                larger ones properly staffed.</p>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Why Choose MoveSmartPlus for Local Moving</div>
                            <p>Local moves are easy to underquote and then rush on the day. We size the crew and
                                vehicle to your home in advance, confirm the price before moving day, and send a team
                                that treats a same-city move with the same care as a longer relocation.</p>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Related Services</div>
                            <p>Moving a full household long-distance instead? See our
                                <a href="{{ route('services.home-shifting') }}">home shifting</a> service. Need
                                somewhere to keep goods for a few weeks during the move? Check our
                                <a href="{{ route('services.warehouse-storage') }}">warehouse storage</a> option.</p>
                        </div>

                        <x-services.faq :items="[
                            [
                                'q' => 'How much does local shifting cost?',
                                'a' => 'Cost depends on the number of rooms, quantity of furniture and boxes, and floor or lift access at both addresses. We confirm a fixed price before the move based on a quick walkthrough or call.',
                            ],
                            [
                                'q' => 'Do you provide same-day local moving?',
                                'a' => 'Yes, most local moves within the same city are completed in a single day, from packing in the morning to unloading and placement at the new address.',
                            ],
                            [
                                'q' => 'Do you provide packing services?',
                                'a' => 'Yes, our crew brings packing material on the day of the move and wraps and boxes your belongings, including fragile and breakable items.',
                            ],
                            [
                                'q' => 'Can you move furniture?',
                                'a' => 'Yes, including wardrobes, sofas, beds and appliances. Furniture is wrapped, and larger pieces are disassembled where needed to move safely through doorways and stairs.',
                            ],
                            [
                                'q' => 'Do you provide loading and unloading?',
                                'a' => 'Yes, loading, transportation and unloading are all included, with boxes placed room-by-room at your new home.',
                            ],
                        ]" heading="Frequently Asked Questions"
                            intro="Common questions about moving within the same city with MoveSmartPlus." />

                        <div class="mt-40 text-center">
                            <a href="{{ url('/') }}" class="theme-btn btn-style-four me-2 mb-2"><span
                                    class="btn-title">Get a Free Local Moving Quote</span></a>
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
