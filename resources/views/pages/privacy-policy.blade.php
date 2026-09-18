@extends('layouts.app')

@section('content')

    <x-page-title title="Privacy Policy" crumb="Privacy Policy" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <p><em>Last updated: {{ now()->format('F j, Y') }}</em></p>

                    <div class="alert alert-warning">
                        This page is a general, sample privacy policy intended for a packers and movers website. It
                        is not legal advice and should be reviewed by a qualified legal professional before being
                        relied on for production use.
                    </div>

                    <div class="h3 mt-40">Introduction</div>
                    <p>This Privacy Policy explains what information MoveSmartPlus ("we", "us", "our") collects
                        through this website, how we use it, and the choices available to you. By using this
                        website or booking a service with us, you agree to the practices described here.</p>

                    <div class="h3 mt-40">Information We Collect</div>
                    <p>We collect information you provide directly to us, and limited technical information
                        collected automatically when you visit the website.</p>

                    <div class="h5 mt-4">Personal Information</div>
                    <p>When you fill out a form on this website, we may collect your name, phone number, email
                        address, and pickup or destination addresses.</p>

                    <div class="h5 mt-4">Moving / Booking Information</div>
                    <p>When you request a quote or book a move, we collect details relevant to the service, such as
                        the type of relocation, cities involved, and any inventory or item details you share with
                        us.</p>

                    <div class="h5 mt-4">Contact Information</div>
                    <p>Information submitted through our contact form or newsletter subscription, including your
                        name, email address and message.</p>

                    <div class="h3 mt-40">How We Use Information</div>
                    <p>We use the information we collect to respond to enquiries, prepare quotes, coordinate and
                        deliver booked services, and send updates related to your booking.</p>

                    <div class="h5 mt-4">Communication</div>
                    <p>If you subscribe to our newsletter or submit a contact form, we may use your email address or
                        phone number to respond to you or send relevant updates. You can ask us to stop this at any
                        time.</p>

                    <div class="h3 mt-40">Cookies</div>
                    <p>This website may use cookies to remember basic preferences and support normal site
                        functionality. You can disable cookies through your browser settings, though some parts of
                        the site may not function as intended without them.</p>

                    <div class="h3 mt-40">Website Analytics</div>
                    <p>We may use analytics tools to understand how visitors use this website, such as which pages
                        are viewed. This information is generally aggregated and is used to improve the website.</p>

                    <div class="h3 mt-40">Third-Party Services</div>
                    <p>We may use third-party services for functions such as email delivery or website analytics.
                        These providers only receive the information necessary to perform their function and are not
                        authorized to use it for any other purpose.</p>

                    <div class="h3 mt-40">Data Security</div>
                    <p>We take reasonable steps to protect the information you share with us. However, no method of
                        transmission over the internet or electronic storage is completely secure, and we cannot
                        guarantee absolute security.</p>

                    <div class="h3 mt-40">Data Retention</div>
                    <p>We retain personal information for as long as necessary to provide our services, respond to
                        enquiries, and meet any applicable legal or accounting requirements.</p>

                    <div class="h3 mt-40">Your Rights</div>
                    <p>You can request access to, correction of, or deletion of the personal information we hold
                        about you, and can unsubscribe from newsletter communications at any time, by contacting us
                        using the details below.</p>

                    <div class="h3 mt-40">Changes to This Policy</div>
                    <p>We may update this Privacy Policy from time to time. Changes will be posted on this page with
                        an updated date at the top.</p>

                    <div class="h3 mt-40">Contact Information</div>
                    <p>If you have questions about this Privacy Policy, contact us at
                        <a href="mailto:info@movesmartplus.com">info@movesmartplus.com</a> or call
                        <a href="tel:+917070784447">+91 7070784447</a>.</p>

                    <p class="mt-40">See also our <a href="{{ route('terms') }}">Terms &amp; Conditions</a>.</p>

                </div>
            </div>
        </div>
    </section>

@endsection
