@extends('layouts.app')

@section('content')

    <x-page-title title="Stay Updated" crumb="Newsletter" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">

                    <div class="h3">Stay Updated</div>
                    <p>Get useful moving tips, relocation information and service updates from MoveSmartPlus,
                        delivered straight to your inbox.</p>

                    <ul class="list-unstyled text-start mx-auto" style="max-width:420px;">
                        <li>&bull; Practical tips for packing and moving day</li>
                        <li>&bull; Updates on our services across Bihar and Jharkhand</li>
                        <li>&bull; Occasional offers on home shifting and vehicle transportation</li>
                    </ul>

                    <div class="mt-4 mx-auto" style="max-width:420px;">
                        <x-newsletter-form id="page" />
                    </div>

                    <p class="mt-4">
                        We only send relevant updates and never share your email address. You can unsubscribe at
                        any time — see our <a href="{{ route('privacy-policy') }}">Privacy Policy</a> for details.
                    </p>

                </div>
            </div>
        </div>
    </section>

@endsection
