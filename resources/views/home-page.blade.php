@extends('layouts.app')

@section('style')
    <style>
        .banner-section-three .outer-container .form-box {
            padding-top: 0px;
            margin-bottom: 0;
        }

        .banner-section-three .outer-box {
            padding-bottom: 60px;
        }

        @media (max-width: 991.98px) {
            .banner-section-three .outer-box {
                padding-bottom: 30px;
            }
        }

        @media (min-width: 1200px) {
            .banner-section-three .outer-container .content-column .inner-column .banner-title {
                font-size: 60px;
                line-height: 65px;
                font-weight: 600;
                letter-spacing: 0;
                margin-bottom: 1rem;
            }
        }

        .banner-section-three .outer-container .form-box .inner-box .form-clt label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: var(--headings-color);
            margin-bottom: 6px;
        }

        /* Compact form spacing — same fields, tighter gaps */
        .banner-section-three .outer-container .form-box .inner-box {
            padding-top: 25px;
            padding-bottom: 30px;
        }

        .banner-section-three .outer-container .form-box .inner-box .title {
            margin-bottom: 6px;
        }

        .banner-section-three .outer-container .form-box .inner-box .form-clt {
            margin-bottom: 18px;
        }

        .banner-section-three .outer-container .form-box .inner-box .form-clt input,
        .banner-section-three .outer-container .form-box .inner-box .form-clt select {
            height: 46px;
        }

        /* Stats section — icons + subtle hover */
        .funfact-block .funfact-icon {
            color: var(--theme-color2);
            font-size: 26px;
            margin-bottom: 14px;
            transition: transform 250ms ease;
        }

        .funfact-block .inner-block {
            transition: transform 250ms ease;
        }

        .funfact-block:hover .inner-block {
            transform: translateY(-4px);
        }

        .funfact-block:hover .funfact-icon {
            transform: scale(1.12);
        }

        @media (prefers-reduced-motion: reduce) {
            .wow {
                visibility: visible !important;
                animation: none !important;
                opacity: 1 !important;
                transform: none !important;
            }

            .funfact-block .inner-block,
            .funfact-block .funfact-icon {
                transition: none !important;
            }

            .funfact-block:hover .inner-block,
            .funfact-block:hover .funfact-icon {
                transform: none !important;
            }
        }

        /* Standardize service card image area — source images have different
           aspect ratios (1536x1024 vs 476x378), so without a fixed ratio the
           cards render at inconsistent heights. */
        .services-section-two .service-block-three .image {
            aspect-ratio: 4 / 3;
        }

        .services-section-two .service-block-three .image img {
            height: 100%;
        }

        /* Service Zone accordion */
        .service-zone-state {
            border: 1px solid rgba(12, 64, 62, 0.12);
            border-radius: 14px;
            margin-bottom: 16px;
            overflow: hidden;
        }

        .service-zone-state summary {
            cursor: pointer;
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 24px;
            font-weight: 600;
            font-size: 18px;
            color: var(--headings-color);
        }

        .service-zone-state summary::-webkit-details-marker {
            display: none;
        }

        .service-zone-state summary .zone-toggle-icon {
            font-size: 14px;
            transition: transform 200ms ease;
        }

        .service-zone-state[open] summary .zone-toggle-icon {
            transform: rotate(45deg);
        }

        .service-zone-state summary:focus-visible {
            outline: 2px solid var(--theme-color2);
            outline-offset: -2px;
        }

        .service-zone-districts {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 10px 16px;
            padding: 0 24px 24px;
            margin: 0;
        }

        .service-zone-districts li {
            font-size: 15px;
            color: var(--text-color);
        }

        .service-zone-note {
            font-size: 15px;
            color: var(--text-color);
        }

        @media (max-width: 575.98px) {
            .service-zone-districts {
                grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
            }
        }
    </style>
@endsection
@section('content')

    <!-- End Main Header  -->
    <!-- start banner-section -->
    <section class="banner-section-three">
        <div class="outer-box">
            <div class="shape-2 bounce-y"><img src="{{ public_url('images/icons/shape-8.png') }}" alt=""></div>
            <ul class="social-info">
                <li>
                    <a href="#">fb</a>
                </li>
                <li>
                    <a href="#">tw</a>
                </li>
                <li>
                    <a href="#">in</a>
                </li>
                <li>
                    <a href="#">yt</a>
                </li>
            </ul>
            <div class="outer-container">
                <div class="shape-1"><img src="{{ public_url('images/icons/shape-7.png') }}" alt=""></div>
                <div class="shape-3 bounce-x"><img src="{{ public_url('images/icons/shape-9.png') }}" alt=""></div>
                <div class="row">
                    <div class="content-column col-xl-6 col-lg-6">
                        <div class="inner-column wow fadeInUp" data-wow-delay="200ms">
                            <h1 class="banner-title">Packers and Movers in <span>Bihar &amp; Jharkhand</span></h1>
                            <div class="text">Move Smart Plus handles home shifting, office relocation, packing,
                                local moving, and car and bike transportation — with trained crews and a written
                                quote before you book.</div>
                            <a href="{{ route('services.index') }}" class="theme-btn btn-style-three mb-5">Explore
                                Our Services<i class="fa-light fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-box">
                            <div class="inner-box">
                                <div class="h3 title wow fadeInUp" data-wow-delay="200ms">Book Your Relocation</div>
                                <div class="text mb-3">Share your move details and get a free quote — no
                                    obligation.</div>
                                <form action="{{ route('booking.store') }}" method="POST">
                                    @csrf

                                    <div class="row gx-3">

                                        <!-- Customer Name -->
                                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay=".2s">
                                            <div class="form-clt">
                                                <label for="booking-customer-name">Your Name</label>
                                                <input type="text" id="booking-customer-name" name="customer_name"
                                                    value="{{ old('customer_name') }}"
                                                    class="@error('customer_name') is-invalid @enderror"
                                                    placeholder="Enter your full name" required>

                                                @error('customer_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Mobile -->
                                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <label for="booking-phone">Mobile Number</label>
                                                <input type="text" id="booking-phone" name="phone" maxlength="10"
                                                    value="{{ old('phone') }}"
                                                    class="@error('phone') is-invalid @enderror"
                                                    placeholder="10-digit mobile number" required>

                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Relocation Type -->
                                        <div class="col-md-12 wow fadeInUp animated" data-wow-delay=".4s">
                                            <div class="form-clt">
                                                <label for="booking-relocation-type">Service Type</label>
                                                <select id="booking-relocation-type" name="relocation_type"
                                                    class="@error('relocation_type') is-invalid @enderror">

                                                    <option value="">Select service type</option>

                                                    <option value="Home" {{ old('relocation_type') == 'Home' ? 'selected' : '' }}>
                                                        Home Relocation
                                                    </option>

                                                    <option value="Office" {{ old('relocation_type') == 'Office' ? 'selected' : '' }}>
                                                        Office Relocation
                                                    </option>

                                                    <option value="Vehicle" {{ old('relocation_type') == 'Vehicle' ? 'selected' : '' }}>
                                                        Vehicle Transportation
                                                    </option>

                                                    <option value="Bike" {{ old('relocation_type') == 'Bike' ? 'selected' : '' }}>
                                                        Bike Transportation
                                                    </option>

                                                    <option value="Car" {{ old('relocation_type') == 'Car' ? 'selected' : '' }}>
                                                        Car Transportation
                                                    </option>

                                                    <option value="Commercial" {{ old('relocation_type') == 'Commercial' ? 'selected' : '' }}>
                                                        Commercial Goods
                                                    </option>

                                                    <option value="Warehouse" {{ old('relocation_type') == 'Warehouse' ? 'selected' : '' }}>
                                                        Warehouse Storage
                                                    </option>

                                                </select>

                                                @error('relocation_type')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Pickup City -->
                                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay=".5s">
                                            <div class="form-clt">

                                                <label for="booking-pickup-city">Pickup City</label>
                                                <select id="booking-pickup-city" name="pickup_city"
                                                    class="@error('pickup_city') is-invalid @enderror">

                                                    <option value="">Select pickup city</option>

                                                    @foreach($cities as $city)

                                                        <option value="{{ $city->id }}" {{ old('pickup_city') == $city->id ? 'selected' : '' }}>

                                                            {{ $city->city_name }}

                                                        </option>

                                                    @endforeach

                                                </select>

                                                @error('pickup_city')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>

                                        <!-- Destination City -->
                                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay=".6s">
                                            <div class="form-clt">

                                                <label for="booking-destination-city">Drop City</label>
                                                <select id="booking-destination-city" name="destination_city"
                                                    class="@error('destination_city') is-invalid @enderror">

                                                    <option value="">Select drop city</option>

                                                    @foreach($cities as $city)

                                                        <option value="{{ $city->id }}" {{ old('destination_city') == $city->id ? 'selected' : '' }}>

                                                            {{ $city->city_name }}

                                                        </option>

                                                    @endforeach

                                                </select>

                                                @error('destination_city')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>

                                        <!-- Pickup Address -->
                                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay=".7s">
                                            <div class="form-clt">

                                                <label for="booking-pickup-address">Pickup Address</label>
                                                <input type="text" id="booking-pickup-address" name="pickup_address"
                                                    value="{{ old('pickup_address') }}"
                                                    class="@error('pickup_address') is-invalid @enderror"
                                                    placeholder="House/street and PIN code" required>

                                                @error('pickup_address')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>

                                        <!-- Destination Address -->
                                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay=".8s">
                                            <div class="form-clt">

                                                <label for="booking-destination-address">Drop Address</label>
                                                <input type="text" id="booking-destination-address"
                                                    name="destination_address" value="{{ old('destination_address') }}"
                                                    class="@error('destination_address') is-invalid @enderror"
                                                    placeholder="House/street and PIN code" required>

                                                @error('destination_address')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>

                                        <!-- Submit -->
                                        <div class="col-md-12 wow fadeInUp animated" data-wow-delay=".9s">
                                            <button type="submit" class="theme-btn btn-style-four w-100">
                                                Get Free Quote →
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner-section -->

    <!-- Funfact Section -->
    <section class="funfact-section pt-0">
        <div class="h4 funfact-title">Move Smart Plus in Numbers</div>
        <div class="container">
            <div class="inner-row">
                @php
                    $stats = [
                        ['icon' => 'fas fa-map-marker-alt', 'label' => 'States <br>Covered', 'stop' => 5],
                        ['icon' => 'fas fa-map', 'label' => 'Districts <br>Covered', 'stop' => 50],
                        ['icon' => 'fas fa-users', 'label' => 'Satisfied <br>Customers', 'stop' => 700],
                        ['icon' => 'fas fa-briefcase', 'label' => 'Trained <br>Employees', 'stop' => 60],
                    ];
                @endphp
                @foreach ($stats as $index => $stat)
                    <div class="funfact-block wow fadeInUp" data-wow-delay="{{ $index * 100 }}ms">
                        <div class="inner-block">
                            <div class="funfact-icon"><i class="{{ $stat['icon'] }}" aria-hidden="true"></i></div>
                            <div class="text">{!! $stat['label'] !!}</div>
                            <div class="h3 count-box"><span class="count-text" data-speed="1500"
                                    data-stop="{{ $stat['stop'] }}">0</span>+</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Funfact Section -->

    <!-- start about-section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="h6 sub-title wow fadeInUp" data-wow-delay="200ms">About Us</div>
                <h2 class="title wow fadeInUp" data-wow-delay="400ms">A Moving Team Bihar &amp; Jharkhand
                    <span>Customers Can Rely On</span>
                </h2>
            </div>
            <div class="upper-box wow fadeInUp" data-wow-delay="400ms">
                <div class="text">Move Smart Plus is a packers and movers company serving Bihar and Jharkhand. We
                    handle home shifting, office relocation, packing, local moving, and car and bike transportation
                    — with a written inventory and a fixed quote agreed before your move.</div>
            </div>
            <div class="row align-items-end">
                <div class="image-column col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image">
                                <div class="img"><img src="{{ public_url('images/resource/about1-1.jpg') }}"
                                        alt="Movers carefully carrying packed boxes during a home relocation"
                                        loading="lazy"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image two">
                                <div class="img"><img src="{{ public_url('images/resource/about1-2.jpg') }}"
                                        alt="A mover in a storage facility preparing goods for transport"
                                        loading="lazy"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-3 col-md-6 offset-xl-1">
                    <div class="inner-column wow fadeInUp" data-wow-delay="700ms">
                        <p>From a single room to a full household or office, our crews handle packing, loading,
                            transport and unloading as one coordinated service.</p>
                        <a href="{{ route('about') }}" class="theme-btn btn-style-one">More About Us<i
                                class="fa-light fa-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about-section -->

    <!-- start services-section-two -->
    <section class="services-section-two">
        <div class="outer-box">
            <div class="outer-container">
                <div class="sec-title text-center light wow fadeInUp" data-wow-delay="200ms">
                    <div class="h6 sub-title">Our Services</div>
                    <h2 class="title">Moving Services for Homes <span>&amp; Businesses</span></h2>
                </div>
                <div class="row gx-4 gy-4">
                    @php
                        $homeServices = [
                            ['icon' => 'flaticon-home-delivery', 'title' => 'Home Shifting', 'text' => 'Professional packing, loading and transport for your household move.', 'route' => 'services.home-shifting', 'image' => 'images/services/home-shifting.png', 'alt' => 'Movers packing household belongings for home shifting'],
                            ['icon' => 'flaticon-delivery-man-2', 'title' => 'Office Relocation', 'text' => 'Office and corporate relocation with minimal business downtime.', 'route' => 'services.office-relocation', 'image' => 'images/services/office-relocation.png', 'alt' => 'Movers packing office furniture for a relocation'],
                            ['icon' => 'flaticon-cargo', 'title' => 'Warehouse Storage', 'text' => 'Short-term and long-term storage for household or business goods.', 'route' => 'services.warehouse-storage', 'image' => 'images/services/warehouse.png', 'alt' => 'Organized warehouse storage facility'],
                            ['icon' => 'flaticon-delivery', 'title' => 'Local Moving', 'text' => 'Same-day packing, loading and delivery within your city.', 'route' => 'services.local-moving', 'image' => 'images/services/local-moving.png', 'alt' => 'Movers loading furniture for a local house shift'],
                            ['icon' => 'flaticon-shipment', 'title' => 'Car Transportation', 'text' => 'Door-to-door car transport with inspection at pickup and delivery.', 'route' => 'services.car-transportation', 'image' => 'images/services/car-transport.png', 'alt' => 'Car loaded onto a carrier for transportation'],
                            ['icon' => 'flaticon-logistic', 'title' => 'Bike Transportation', 'text' => 'Careful packing and doorstep delivery for your bike.', 'route' => 'services.bike-transportation', 'image' => 'images/services/bike-transport.png', 'alt' => 'Motorcycle packed and crated for transportation'],
                        ];
                    @endphp
                    @foreach ($homeServices as $index => $service)
                        <div class="col-xl-4 col-md-6">
                            <div class="service-block-three">
                                <div class="inner-block">
                                    <div class="image">
                                        <a href="{{ route($service['route']) }}">
                                            <img src="{{ public_url($service['image']) }}" alt="{{ $service['alt'] }}"
                                                loading="lazy">
                                            <img src="{{ public_url($service['image']) }}" alt="{{ $service['alt'] }}"
                                                loading="lazy">
                                        </a>
                                    </div>
                                    <div class="content-box">
                                        <div class="inner-box">
                                            <div class="icon"><i class="{{ $service['icon'] }}"></i></div>
                                            <div class="content">
                                                <div class="h4 title"><a
                                                        href="{{ route($service['route']) }}">{{ $service['title'] }}</a>
                                                </div>
                                                <div class="text">{{ $service['text'] }}</div>
                                            </div>
                                            <div class="counte">{{ sprintf('%02d', $index + 1) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('services.index') }}" class="theme-btn btn-style-five">View All
                        Services<i class="fa-light fa-arrow-up-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end services-section-two -->

    <!-- start service-zone-section -->
    <section class="why-choose-us-section pb-90 pt-0">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="h6 sub-title">Where We Operate</div>
                <h2 class="title">Our <span>Service Zones</span></h2>
                <div class="text">Move Smart Plus provides relocation support across 5+ states, with the most
                    coverage across 50+ districts in Bihar and Jharkhand. Expand a state below to check the
                    districts closest to you — this shows our service area, not a guarantee that every location is
                    currently active, so please confirm availability for your address when you contact us.</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    @foreach ($stateZones as $state)
                        <details class="service-zone-state">
                            <summary>
                                <span>{{ $state['name'] }} <small
                                        class="fw-normal">({{ count($state['districts']) }}
                                        districts)</small></span>
                                <span class="zone-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </summary>
                            <ul class="service-zone-districts">
                                @foreach ($state['districts'] as $district)
                                    <li>{{ $district }}</li>
                                @endforeach
                            </ul>
                        </details>
                    @endforeach
                    <details class="service-zone-state">
                        <summary>
                            <span>Other Supported States</span>
                            <span class="zone-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                        </summary>
                        <div class="service-zone-districts" style="display:block;">
                            <p class="service-zone-note">We also support relocation to a small number of
                                additional states beyond Bihar and Jharkhand.
                                <a href="{{ route('contact-us') }}">Contact us</a> to confirm coverage for your
                                specific route.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>
    <!-- end service-zone-section -->

    <!-- start working-section-three  -->
    <section class="working-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title wow fadeInUp" data-wow-delay="200ms">
                        <div class="h6 sub-title">How It Works</div>
                        <h2 class="title">Simple Process for <br>a <span>Smooth Move</span></h2>
                    </div>
                    <div class="hiw-image-box wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ public_url('images/resource/how-it-work.jpg') }}"
                                    alt="Movers carrying packed boxes during a household move" loading="lazy">
                                <img src="{{ public_url('images/resource/how-it-work.jpg') }}"
                                    alt="Movers carrying packed boxes during a household move" loading="lazy">
                            </div>
                            <div class="features">
                                <ul>
                                    <li><i class="icon fas fa-check-circle"></i> <span>Safe lifting practices and modern
                                            tools</span></li>
                                    <li><i class="icon fas fa-check-circle"></i> <span>Fragile, artwork, electronics, and
                                            heavy items</span></li>
                                    <li><i class="icon fas fa-check-circle"></i> <span>High-quality packing materials for
                                            maximum protection</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="working-block">
                        <div class="inner-block active">
                            <div class="counter one"><span>01</span></div>
                            <div class="content-box">
                                <div class="step">Step</div>
                                <div class="h5 title">Request a Free Quote</div>
                                <div class="text">Tell us about your move and get a fast, accurate estimate.</div>
                            </div>
                        </div>
                    </div>

                    <div class="working-block">
                        <div class="inner-block">
                            <div class="counter two"><span>02</span></div>
                            <div class="content-box">
                                <div class="step">Step</div>
                                <div class="h5 title">We Pack & Prepare</div>
                                <div class="text">Our team carefully packs your belongings and gets everything ready.</div>
                            </div>
                        </div>
                    </div>

                    <div class="working-block">
                        <div class="inner-block">
                            <div class="counter three"><span>03</span></div>
                            <div class="content-box">
                                <div class="step">Step</div>
                                <div class="h5 title">We Move Your Items Safely</div>
                                <div class="text">We transport your items securely to your new destination.</div>
                            </div>
                        </div>
                    </div>

                    <div class="working-block">
                        <div class="inner-block">
                            <div class="counter four"><span>04</span></div>
                            <div class="content-box">
                                <div class="step">Step</div>
                                <div class="h5 title">Unload & Set Up</div>
                                <div class="text">We help with unpacking and furniture placement as needed.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end working-section-three -->


    <!-- start why-choose-us-section -->
    <section class="why-choose-us-section pb-90 pt-0">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="h6 sub-title">Why Choose Us</div>
                <h2 class="title">Why Choose Move <span>Smart Plus?</span></h2>
                <div class="text">Four things we get right on every move, whether it's across town or across Bihar
                    and Jharkhand.</div>
            </div>
            <div class="row">
                <div class="image-column col-xl-4 col-lg-4">
                    <div class="inner-column">
                        <div class="image"><img src="{{ public_url('images/resource/wcu1-1.jpg') }}"
                                alt="Move Smart Plus mover in a storage facility" loading="lazy"></div>
                    </div>
                </div>
                <div class="content-column col-xl-5 col-lg-8">
                    <div class="inner-column">
                        <div class="feature-item">
                            <div class="inner-block">
                                <div class="icon"><i class="flaticon-shipment"></i></div>
                                <div class="content">
                                    <div class="h4 title"><a href="{{ route('contact-us') }}">Transparent &amp; Fair
                                            Pricing</a>
                                    </div>
                                    <div class="text">A fixed, written quote shared before you book — no surprise
                                        charges added on moving day.</div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="inner-block active">
                                <div class="icon"><i class="flaticon-delivery-man-1"></i></div>
                                <div class="content">
                                    <div class="h4 title"><a href="{{ route('about') }}">Trained &amp; Experienced
                                            Team</a></div>
                                    <div class="text">Trained crews who handle packing, loading and transport with
                                        care, from a single room to a full office.</div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="inner-block">
                                <div class="icon"><i class="flaticon-delivery-man"></i></div>
                                <div class="content">
                                    <div class="h4 title"><a href="{{ route('timeline') }}">Fast &amp; On-Time
                                            Service</a>
                                    </div>
                                    <div class="text">Local shifts completed the same day, with move dates agreed
                                        upfront and kept.</div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="inner-block">
                                <div class="icon"><i class="flaticon-cash-on-delivery"></i></div>
                                <div class="content">
                                    <div class="h4 title"><a href="{{ route('help-center') }}">Written Inventory,
                                            Every Move</a>
                                    </div>
                                    <div class="text">A written inventory taken at pickup and checked again at
                                        delivery, so nothing gets left behind.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="anim-shape"><img src="{{ public_url('images/icons/wcu1-1.png') }}" alt=""
                            loading="lazy"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end why-choose-us-section -->

    <!-- start faq-section -->
    <section class="faq-section pt-0">
        <div class="outer-box pb-100">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-5">
                        <div class="inner-column">
                            <div class="sec-title light">
                                <div class="h6 sub-title">FAQS</div>
                                <h2 class="title">Answers to Common <span>Questions</span></h2>
                            </div>
                            <div class="content-box">
                                <div class="inner-box">
                                    <div class="h3 title">Have a Question We Haven't Covered?</div>
                                    <a href="{{ route('contact-us') }}" class="theme-btn btn-style-five">Get In
                                        Touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-column col-lg-7">
                        <div class="inner-column wow fadeInUp" data-wow-delay="200ms">
                            <div class="faq-box">
                                <div class="inner-box">
                                    @php
                                        $homeFaqs = [
                                            ['q' => 'How early should I book my moving date?', 'a' => "For local shifts within the same city, 3-5 days' notice is usually enough. For intercity moves or peak season dates, we recommend booking 2-3 weeks ahead."],
                                            ['q' => 'Do you provide a free estimate?', 'a' => 'Yes. A move coordinator reviews your requirements and shares a written, fixed quote before you book — no charges added on moving day.'],
                                            ['q' => 'Can you move heavy or bulky items like wardrobes and appliances?', 'a' => 'Yes, our crew is trained to handle heavy and oversized furniture and appliances using trolleys, ramps and proper lifting technique.'],
                                            ['q' => 'Should I pack my belongings myself or let the movers do it?', 'a' => "Most customers let our trained packers handle it, since materials and technique are matched to each item. You're welcome to pack personal or sentimental items yourself."],
                                        ];
                                    @endphp
                                    <ul class="accordion-box">
                                        @foreach ($homeFaqs as $index => $faq)
                                            <li class="accordion block {{ $index === 0 ? 'active-block' : '' }}">
                                                <div class="acc-btn {{ $index === 0 ? 'active' : '' }}">{{ $faq['q'] }}
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                                <div class="acc-content {{ $index === 0 ? 'current' : '' }}">
                                                    <div class="content">
                                                        <div class="text">{{ $faq['a'] }}</div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => collect($homeFaqs)->map(fn ($faq) => [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a'],
            ],
        ])->all(),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <!-- end faq-schema -->

    <!-- start blog-section -->
    <section class="blog-section">
        <div class="auto-container">
            <div class="sec-title-box">
                <div class="sec-title">
                    <div class="h6 sub-title">Our Blog</div>
                    <h2 class="title">Helpful Moving <br>Guides <span>&amp; Articles</span></h2>
                </div>
                <a href="{{ route('blogs.index') }}" class="theme-btn btn-style-three">See All Article<i
                        class="fa-light fa-arrow-up-right"></i></a>
            </div>
            <div class="row gx-4">
                @foreach ($blogs as $blog)
                    <x-blog-card :blog="$blog" />
                @endforeach
            </div>
        </div>
    </section>
    <!-- end blog-section -->

    <!-- start cta-section -->
    <section class="cta-section">
        <div class="outer-box">
            <div class="content">
                <div class="h2 title">Ready to plan your move?</div>
                <a href="{{ route('contact-us') }}" class="theme-btn btn-style-four">Get a Moving Quote<i
                        class="fa-light fa-arrow-up-right"></i></a>
            </div>
        </div>
    </section>
    <!-- end cta-section -->

@endsection