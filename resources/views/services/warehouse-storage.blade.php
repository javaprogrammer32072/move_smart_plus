@extends('layouts.app')

@section('content')

    <x-services.page-title title="Warehouse Storage Services in Bihar & Jharkhand" crumb="Warehouse Storage" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!--Start Services Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    <x-services.sidebar current="warehouse-storage" />
                </div>
                <!--End Services Details Sidebar-->

                <!--Start Services Details Content-->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <img class="w-100" src="{{ public_url('images/services/warehouse.png') }}"
                            alt="Organized warehouse storage facility with packed household and business goods"
                            width="476" height="378">

                        <div class="h3 mt-4">A Place to Keep Your Goods Between Moves</div>
                        <p>Not every relocation happens in one step. You might be moving out of your current home
                            before the new one is ready, waiting on office renovation to finish, or simply need
                            somewhere to keep excess inventory. MoveSmartPlus offers warehouse storage in Bihar and
                            Jharkhand for exactly these situations, so your goods are packed, moved and kept safely
                            until you're ready to take delivery.</p>
                        <p>Storage is booked alongside a move or on its own, with a written inventory taken at the
                            time your goods are packed and checked again against the same list when they're returned
                            to you, so you always know what's in storage.</p>

                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">Short-Term and Long-Term Storage</div>
                                <p>Storage is charged by the duration you actually need, whether that's a few weeks
                                    between homes or several months while you plan your next move. There's no minimum
                                    contract that locks you in beyond what you require.</p>
                                <blockquote class="blockquote-one">Every carton and item that goes into storage is
                                    recorded against your inventory list, so nothing is added or removed from your
                                    consignment without your knowledge.</blockquote>
                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="{{ public_url('images/services/page/loading.png') }}"
                                            alt="Packer preparing household goods before warehouse storage"
                                            loading="lazy">
                                        <p>Household goods — furniture, appliances and boxed belongings — are packed
                                            to the same standard as a house shift before they go into storage, so
                                            they come out in the same condition.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="{{ public_url('images/services/page/unloading.png') }}"
                                            alt="Movers loading goods into a truck for warehouse pickup and delivery"
                                            loading="lazy">
                                        <p>We handle pickup from your home or office and delivery back to you when
                                            you're ready, so you don't need to arrange separate transport for goods
                                            coming out of storage.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Household Goods and Business Inventory Storage</div>
                            <p>We store both household consignments and business inventory. Household storage is
                                usually a full or partial home's worth of furniture and boxes between two addresses.
                                Business storage covers stock, documents, furniture and equipment for offices and
                                shops that need space outside their premises. Each consignment is kept and tracked
                                separately.</p>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Why Choose MoveSmartPlus for Storage</div>
                            <p>We keep storage simple: a proper inventory at intake, goods packed to the same
                                standard used on our moving jobs, and one point of contact for scheduling pickup and
                                delivery. You're told upfront what the storage will cost for the period you need, with
                                no surprise charges when you collect your goods.</p>
                        </div>

                        <div class="mt-40">
                            <div class="h3">Related Services</div>
                            <p>Storing goods as part of a bigger move? Pair this with our
                                <a href="{{ route('services.home-shifting') }}">home shifting</a> or
                                <a href="{{ route('services.office-relocation') }}">office relocation</a> services, or
                                see <a href="{{ route('services.local-moving') }}">local moving</a> if you're shifting
                                within the same city.</p>
                        </div>

                        <x-services.faq :items="[
                            [
                                'q' => 'How does warehouse storage work?',
                                'a' => 'Your goods are packed and inventoried, moved to our storage facility, and kept there until you request delivery. You can book storage on its own or as part of a home or office move.',
                            ],
                            [
                                'q' => 'Can I store household goods in your warehouse?',
                                'a' => 'Yes, household furniture, appliances and boxed belongings can be stored for as long as you need, whether you are between homes or waiting on renovation work.',
                            ],
                            [
                                'q' => 'Can businesses store inventory?',
                                'a' => 'Yes, we store business inventory, stock, documents, furniture and equipment for offices and shops that need extra space, tracked separately from other consignments.',
                            ],
                            [
                                'q' => 'How long can goods be stored?',
                                'a' => 'For as short as a few weeks or as long as several months, depending on your requirement. There is no fixed minimum contract beyond the duration you actually need.',
                            ],
                            [
                                'q' => 'Do you provide pickup and delivery?',
                                'a' => 'Yes, we collect your goods from your home or office for storage and deliver them back to you when you are ready, so you do not need to arrange transport separately.',
                            ],
                            [
                                'q' => 'How is the storage cost calculated?',
                                'a' => 'Cost depends on the volume of goods being stored and the duration of storage. We share a fixed quote after understanding what you need to store and for how long.',
                            ],
                        ]" heading="Frequently Asked Questions"
                            intro="Answers to common questions about storing household or business goods with MoveSmartPlus." />

                        <div class="mt-40 text-center">
                            <a href="{{ url('/') }}" class="theme-btn btn-style-four me-2 mb-2"><span
                                    class="btn-title">Get a Free Storage Quote</span></a>
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
