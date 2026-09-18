@extends('layouts.app')

@section('content')

    <x-page-title title="Terms & Conditions" crumb="Terms & Conditions" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <p><em>Last updated: {{ now()->format('F j, Y') }}</em></p>

                    <div class="alert alert-warning">
                        This page is a general, sample terms and conditions document intended for a packers and
                        movers website. It is not legal advice and should be reviewed by a qualified legal
                        professional before being relied on for production use.
                    </div>

                    <div class="h3 mt-40">Introduction</div>
                    <p>These Terms &amp; Conditions apply when you use this website or book a service with
                        MoveSmartPlus ("we", "us", "our"). By booking a service with us, you agree to these terms.</p>

                    <div class="h3 mt-40">Services Provided</div>
                    <p>We provide <a href="{{ route('services.home-shifting') }}">home shifting</a>, <a
                            href="{{ route('services.office-relocation') }}">office relocation</a>, <a
                            href="{{ route('services.warehouse-storage') }}">warehouse storage</a>, <a
                            href="{{ route('services.local-moving') }}">local moving</a>, <a
                            href="{{ route('services.car-transportation') }}">car transportation</a>, and <a
                            href="{{ route('services.bike-transportation') }}">bike transportation</a> services
                        across Bihar and Jharkhand. The exact scope of your booking is confirmed in the quote shared
                        before you book.</p>

                    <div class="h3 mt-40">Bookings and Estimates</div>
                    <p>Quotes are based on the information you provide about your move, including volume of goods,
                        distance and access conditions. If the actual scope of your move differs significantly from
                        what was shared at the time of quoting, the final cost may be revised and will be discussed
                        with you before proceeding.</p>

                    <div class="h3 mt-40">Customer Responsibilities</div>
                    <p>You are responsible for providing accurate information about your move, disclosing any items
                        that require special handling, and ensuring someone is available at both the pickup and
                        delivery addresses on the scheduled dates.</p>

                    <div class="h3 mt-40">Payment Terms</div>
                    <p>Payment terms are shared along with your quote before the move. Accepted payment methods will
                        be confirmed at the time of booking.</p>

                    <div class="h3 mt-40">Cancellation and Rescheduling</div>
                    <p>You can request to cancel or reschedule a booking by contacting our support team. We
                        recommend doing so as early as possible, as changes made close to the scheduled move date may
                        be affected by crew and vehicle availability.</p>

                    <div class="h3 mt-40">Liability and Insurance</div>
                    <p>We take reasonable care in packing, handling and transporting your belongings. Where a
                        particular service includes insurance coverage, this is described on that service's page and
                        will be confirmed at the time of booking. Our overall liability for any booking is limited
                        to the value agreed with you at the time of booking.</p>

                    <div class="h3 mt-40">Governing Law</div>
                    <p>These terms are governed by the laws of India, and any disputes will be subject to the
                        jurisdiction of the courts in Bihar.</p>

                    <div class="h3 mt-40">Changes to These Terms</div>
                    <p>We may update these Terms &amp; Conditions from time to time. Changes will be posted on this
                        page with an updated date at the top.</p>

                    <div class="h3 mt-40">Contact Information</div>
                    <p>Questions about these terms can be sent to
                        <a href="mailto:info@movesmartplus.com">info@movesmartplus.com</a> or by calling
                        <a href="tel:+917070784447">+91 7070784447</a>.</p>

                    <p class="mt-40">See also our <a href="{{ route('privacy-policy') }}">Privacy Policy</a>.</p>

                </div>
            </div>
        </div>
    </section>

@endsection
