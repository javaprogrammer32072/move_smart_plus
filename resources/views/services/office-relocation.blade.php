@extends('layouts.app')

@section('content')

    <x-services.page-title title="Office Relocation Services in Bihar & Jharkhand" crumb="Office Relocation" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!--Start Services Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    <x-services.sidebar current="office-relocation" />
                </div>
                <!--End Services Details Sidebar-->

                <!--Start Services Details Content-->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <img class="w-100" src="{{ public_url('images/services/office-relocation.png') }}"
                            alt="Movers packing and loading office furniture for a corporate relocation" width="1536"
                            height="1024">

                        <div class="h3 mt-4">Office Relocation, Handled Around Your Working Hours</div>
                        <p>Shifting an office is different from shifting a home — desks, server racks, printers and
                            client files all have to reach the new address in the same working order they left the old
                            one, usually over a weekend so Monday morning isn't disrupted. MoveSmartPlus plans each
                            office move around your business hours, from a small two-room startup office to a full
                            corporate floor, and works to a fixed schedule agreed with you in advance.</p>
                        <p>Every relocation starts with a walkthrough of your current office to list workstations,
                            furniture, files, and equipment, followed by a written moving plan for your new floor so
                            desks and cabins go back together in the right place on the first attempt. We serve
                            businesses across Bhagalpur and other cities in Bihar and Jharkhand, with one move
                            coordinator as your single point of contact from planning to move-in.</p>

                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">Packing, IT Equipment and Furniture Handling</div>
                                <p>Office moves involve a mix of fragile electronics, bulky furniture and paperwork
                                    that all need different handling. Our crew separates these into labelled
                                    categories at the packing stage so nothing gets misplaced between your old and new
                                    address.</p>
                                <blockquote class="blockquote-one">Computers, monitors and networking equipment are
                                    packed and labelled by workstation, so reconnecting desks at the new office takes
                                    minutes rather than a full afternoon of searching for cables.</blockquote>
                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="{{ public_url('images/services/page/loading.png') }}"
                                            alt="Packer wrapping office equipment before an office relocation"
                                            loading="lazy">
                                        <p>Desks, chairs, cabins and storage units are disassembled where needed, with
                                            fittings bagged and labelled, and IT equipment individually wrapped before
                                            loading.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="{{ public_url('images/services/page/unloading.png') }}"
                                            alt="Movers loading office furniture into a truck for corporate relocation"
                                            loading="lazy">
                                        <p>At the new office, furniture is reassembled and placed as per your floor
                                            plan, and workstations are unpacked and arranged so your team can start
                                            work the same day.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Small Office and Corporate Office Relocation</div>
                            <p>We handle both ends of the scale — a small office with a handful of workstations that
                                can move in a single shift, and a full corporate floor that needs a multi-team crew,
                                multiple vehicles and a phased move-out plan to keep part of your office running while
                                the rest relocates. The size of the crew and the number of trips are scoped to your
                                office after the walkthrough, so you get a realistic timeline rather than a generic
                                one.</p>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Why Choose MoveSmartPlus for Office Relocation</div>
                            <p>Business downtime is the real cost of an office move, so our crews are trained to work
                                to a fixed schedule and a single moving plan agreed before moving day. You deal with
                                one move coordinator throughout, get a written inventory of everything that leaves
                                your old office, and a transparent quote with no charges added once the move is
                                underway.</p>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Related Services</div>
                            <p>Need somewhere to keep equipment or files between office moves? See our
                                <a href="{{ route('services.warehouse-storage') }}">warehouse storage</a> service. If
                                your team is also relocating their homes, our
                                <a href="{{ route('services.home-shifting') }}">home shifting</a> and
                                <a href="{{ route('services.local-moving') }}">local moving</a> services cover
                                household relocation within the same city.</p>
                        </div>

                        <x-services.faq :items="[
                            [
                                'q' => 'How much does office relocation cost?',
                                'a' => 'Cost depends on the number of workstations, volume of furniture and equipment, floor accessibility, and distance between offices. We visit or do a video walkthrough and share a fixed quote before you book.',
                            ],
                            [
                                'q' => 'How long does an office move take?',
                                'a' => 'A small office of a few workstations can usually be moved and set up in a single day. Larger corporate offices are planned in phases, often over a weekend, and the exact timeline is confirmed after the site walkthrough.',
                            ],
                            [
                                'q' => 'Do you provide office packing services?',
                                'a' => 'Yes. Our crew packs desks, files, electronics and furniture using appropriate materials for each item, and labels every box by department or workstation for easy unpacking.',
                            ],
                            [
                                'q' => 'Can you move office furniture and equipment?',
                                'a' => 'Yes, including desks, chairs, cabins, storage units, computers, monitors and networking equipment. Furniture is disassembled and reassembled where required.',
                            ],
                            [
                                'q' => 'Do you provide loading and unloading?',
                                'a' => 'Yes, our crew handles loading at your current office and unloading and placement at the new one, including reassembling furniture as per your floor plan.',
                            ],
                            [
                                'q' => 'Can you relocate a small office?',
                                'a' => 'Yes, small offices with a handful of workstations are usually completed in a single shift with a smaller crew, and are quoted and scheduled the same way as larger moves.',
                            ],
                            [
                                'q' => 'Do you provide office relocation within the same city?',
                                'a' => 'Yes, local office relocation within the same city is one of our most requested services, along with intercity office moves across Bihar and Jharkhand.',
                            ],
                        ]" heading="Frequently Asked Questions"
                            intro="Common questions from businesses planning an office relocation with MoveSmartPlus." />

                        <div class="mt-40 text-center">
                            <a href="{{ url('/') }}" class="theme-btn btn-style-four me-2 mb-2"><span
                                    class="btn-title">Get a Free Office Relocation Quote</span></a>
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
