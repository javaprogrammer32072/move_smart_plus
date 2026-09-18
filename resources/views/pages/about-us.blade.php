@extends('layouts.app')

@section('content')

    <x-page-title title="About Move Smart Plus" crumb="About Us" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <img class="w-100" src="{{ public_url('images/services/page/home-shift.png') }}"
                        alt="MoveSmartPlus crew carefully handling household items during a relocation" width="1536"
                        height="1024">

                    <div class="h3 mt-4">Who We Are</div>
                    <p>Move Smart Plus is a packers and movers company serving Bihar and Jharkhand, built around one
                        simple idea — that moving your home or office shouldn't mean handing your belongings to
                        strangers and hoping for the best. We plan every move with a written inventory, a trained
                        crew, and a single move coordinator you can reach from the day you book to the day the last
                        box is unpacked.</p>
                    <p>We're based in Bhagalpur, Bihar, and work across cities in Bihar and Jharkhand, covering both
                        local shifts within the same city and intercity relocations.</p>

                    <div class="h3 mt-40">What We Do</div>
                    <p>Our work covers the full range of what a move usually involves: <a
                            href="{{ route('services.home-shifting') }}">residential home shifting</a>, <a
                            href="{{ route('services.office-relocation') }}">office relocation</a> for small and
                        corporate offices, packing and loading, furniture handling, <a
                            href="{{ route('services.car-transportation') }}">car</a> and <a
                            href="{{ route('services.bike-transportation') }}">bike transportation</a>, and <a
                            href="{{ route('services.warehouse-storage') }}">warehouse storage</a> for household goods
                        and business inventory. You can see the full list on our <a
                            href="{{ route('services.index') }}">services page</a>.</p>

                    <blockquote class="blockquote-one">Every move starts with a written inventory and a fixed quote,
                        so you know what's moving and what it costs before the crew ever arrives.</blockquote>

                    <div class="h3 mt-40">How We Work</div>
                    <p>Each booking is assigned one move coordinator who stays your point of contact throughout —
                        from the initial walkthrough or call, through packing and transport, to delivery at your new
                        address. We handle belongings the way we'd want our own handled: labelled by room, wrapped
                        appropriately, and checked off against the same inventory list at pickup and at delivery.
                        You can read more about what each step looks like on our <a
                            href="{{ route('timeline') }}">moving process page</a>.</p>

                    <div class="h3 mt-40">Questions Before You Book?</div>
                    <p>Our <a href="{{ route('help-center') }}">Help Center</a> answers common questions about
                        booking, pricing and our services, or you can <a href="{{ route('contact-us') }}">contact
                            us</a> directly and our team will help you plan your move.</p>

                    <div class="mt-40 text-center">
                        <a href="{{ route('contact-us') }}" class="theme-btn btn-style-four me-2 mb-2"><span
                                class="btn-title">Get in Touch</span></a>
                        <a href="{{ route('services.index') }}" class="theme-btn btn-style-three mb-2"><span
                                class="btn-title">View Our Services</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
