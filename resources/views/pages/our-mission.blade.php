@extends('layouts.app')

@section('content')

    <x-page-title title="Our Mission" crumb="Our Mission" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <img class="w-100" src="{{ public_url('images/services/page/unloading.png') }}"
                        alt="MoveSmartPlus movers helping a family settle into their new home" loading="lazy">

                    <div class="h3 mt-4">Why We Do This</div>
                    <p>Moving is stressful mainly because it's out of your hands — someone else is carrying
                        everything you own. Our mission is to make that handover something you don't have to worry
                        about, for every customer we serve across Bihar and Jharkhand.</p>

                    <blockquote class="blockquote-one">A better relocation experience comes down to a few things done
                        consistently: clear communication, careful handling, and showing up when we said we would.</blockquote>

                    <div class="h3 mt-40">What We Work Towards</div>

                    <div class="row gy-4 mt-2">
                        <div class="col-md-6">
                            <div class="h5">Safe Relocation</div>
                            <p>Your belongings are packed, handled and transported with the same care whether it's a
                                short local move or a longer intercity shift.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="h5">Reliable Service</div>
                            <p>A crew that arrives on the agreed date, with the vehicle and manpower scoped correctly
                                for your move.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="h5">Transparent Communication</div>
                            <p>A written quote before you book, and one move coordinator you can reach with questions
                                throughout the process.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="h5">Customer Convenience</div>
                            <p>From the first enquiry to final delivery, the process is built to be simple for you,
                                not just efficient for us.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="h5">Careful Handling</div>
                            <p>Room-by-room packing, proper materials, and an inventory checked at both ends of your
                                move.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="h5">Timely Service</div>
                            <p>Move dates and delivery windows are agreed upfront and treated as commitments, not
                                estimates.</p>
                        </div>
                    </div>

                    <div class="h3 mt-40">Serving Bihar and Jharkhand</div>
                    <p>We're based in Bhagalpur and work with customers across Bihar and Jharkhand — read more about
                        <a href="{{ route('about') }}">who we are</a> or see how a move actually runs on our <a
                            href="{{ route('timeline') }}">moving process page</a>.</p>

                    <div class="mt-40 text-center">
                        <a href="{{ route('contact-us') }}" class="theme-btn btn-style-four mb-2"><span
                                class="btn-title">Talk to Our Team</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
