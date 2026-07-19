@extends('layouts.app')

@section('title', 'Packers and Movers in India | House Shifting, Bike & Car Transport | MoveSmartPlus')
@section('style')
    <style>
        .banner-section-three .outer-container .form-box {
            padding-top: 0px;
        }

        .banner-section-three .outer-container .content-column .inner-column .banner-title {
            font-size: 60px;
            line-height: 65px;
            font-weight: 600;
            letter-spacing: 0;
            margin-bottom: 1rem;
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
                    <a href="index-3.html#">fb</a>
                </li>
                <li>
                    <a href="index-3.html#">tw</a>
                </li>
                <li>
                    <a href="index-3.html#">in</a>
                </li>
                <li>
                    <a href="index-3.html#">yt</a>
                </li>
            </ul>
            <div class="outer-container">
                <div class="shape-1"><img src="{{ public_url('images/icons/shape-7.png') }}" alt=""></div>
                <div class="shape-3 bounce-x"><img src="{{ public_url('images/icons/shape-9.png') }}" alt=""></div>
                <div class="row">
                    <div class="content-column col-xl-6 col-lg-6">
                        <div class="inner-column wow fadeInUp" data-wow-delay="200ms">
                            <div class="h1 banner-title">Wherever your business moves <span>we’re there</span></div>
                            <div class="text">At Movingza we are dedicated to making every move simple, smooth, and
                                stress-free. With years of experience in the moving and logistics</div>
                            <a href="page-about.html" class="theme-btn btn-style-three mb-5">Discover More<i
                                    class="fa-light fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-box">
                            <div class="inner-box">
                                <div class="h3 title wow fadeInUp" data-wow-delay="200ms">Book Your Relocation</div>
                                <form action="{{ route('booking.store') }}" method="POST">
                                    @csrf

                                    <div class="row gx-3">

                                        <!-- Customer Name -->
                                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay=".2s">
                                            <div class="form-clt">
                                                <input type="text" name="customer_name" value="{{ old('customer_name') }}"
                                                    class="@error('customer_name') is-invalid @enderror"
                                                    placeholder="Customer Name" required>

                                                @error('customer_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Mobile -->
                                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="phone" maxlength="10" value="{{ old('phone') }}"
                                                    class="@error('phone') is-invalid @enderror" placeholder="Mobile Number"
                                                    required>

                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Relocation Type -->
                                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay=".4s">
                                            <div class="form-clt">
                                                <select name="relocation_type"
                                                    class="@error('relocation_type') is-invalid @enderror">

                                                    <option value="">Relocation Type</option>

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

                                                <select name="pickup_city"
                                                    class="@error('pickup_city') is-invalid @enderror">

                                                    <option value="">Select Pickup City</option>

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

                                        <!-- Pickup Address -->
                                        <div class="col-md-12 wow fadeInUp animated" data-wow-delay=".6s">
                                            <div class="form-clt">

                                                <input type="text" name="pickup_address" value="{{ old('pickup_address') }}"
                                                    class="@error('pickup_address') is-invalid @enderror"
                                                    placeholder="Pickup Address (Including PIN Code)" required>

                                                @error('pickup_address')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>

                                        <!-- Destination City -->
                                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay=".7s">
                                            <div class="form-clt">

                                                <select name="destination_city"
                                                    class="@error('destination_city') is-invalid @enderror">

                                                    <option value="">Select Destination City</option>

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

                                        <!-- Destination Address -->
                                        <div class="col-md-12 wow fadeInUp animated" data-wow-delay=".8s">
                                            <div class="form-clt">

                                                <input type="text" name="destination_address"
                                                    value="{{ old('destination_address') }}"
                                                    class="@error('destination_address') is-invalid @enderror"
                                                    placeholder="Destination Address (Including PIN Code)" required>

                                                @error('destination_address')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>

                                        <!-- Submit -->
                                        <div class="col-md-12 wow fadeInUp animated" data-wow-delay=".9s">
                                            <button type="submit" class="theme-btn btn-style-four w-100">
                                                Continue Booking →
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
        <video autoplay="" muted="" loop="" playsinline="" class="bg-video">
            <source src="{{ public_url('images/resource/banner3-1.mp4 ')}}" type="video/mp4">
        </video>
    </section>
    <!-- end banner-section -->

    <!-- start about-section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="h6 sub-title wow fadeInUp" data-wow-delay="200ms">About Us</div>
                <div class="h2 title wow fadeInUp" data-wow-delay="400ms">Experience a Better Way to Move With a Team
                    <span>That Truly Cares</span>
                </div>
            </div>
            <div class="upper-box wow fadeInUp" data-wow-delay="400ms">
                <div class="text">It is a long established fact that a reader will be distracted by the readable content of
                    a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like readable
                    English. </div>
                <div class="author-info">
                    <div class="image"><img src="{{ public_url('images/resource/about1-1.png') }}" alt=""></div>
                    <div class="text">Based on 204 Reviews</div>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="image-column col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image">
                                <div class="img"><img src="{{ public_url('images/resource/about1-1.jpg') }}" alt=""></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image two">
                                <div class="img"><img src="{{ public_url('images/resource/about1-2.jpg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-3 col-md-6 offset-xl-1">
                    <div class="inner-column wow fadeInUp" data-wow-delay="700ms">
                        <div class="funfact-box">
                            <div class="inner-box">
                                <div class="h6 title">Satisfaction</div>
                                <div class="count-info">
                                    <div class="count-box"><span class="count-text" data-speed="3000"
                                            data-stop="98">0</span>%</div>
                                    <div class="text">Satisfaction <br>Guaranteed</div>
                                </div>
                            </div>
                        </div>
                        <div class="funfact-box">
                            <div class="inner-box">
                                <div class="h6 title">Countries</div>
                                <div class="count-info">
                                    <div class="count-box"><span class="count-text" data-speed="3000"
                                            data-stop="150">0</span>+</div>
                                    <div class="text">Expanding <br>in 25 Countries</div>
                                </div>
                            </div>
                        </div>
                        <a href="page-about.html" class="theme-btn btn-style-one">More About Us<i
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
                    <div class="h6 sub-title">Our Service</div>
                    <div class="h2 title">Reliable Moving Services for Homes <span>& Businesses</span></div>
                </div>
                <div class="service-two-slider swiper-container pb-0">
                    <div class="swiper-wrapper wow fadeInUp" data-wow-delay="400ms">
                        <div class="service-block-three swiper-slide">
                            <div class="inner-block">
                                <div class="image">
                                    <a href="page-service-details.html">
                                        <img src="{{ public_url('images/resource/service3-1.jpg') }}" alt="blog">
                                        <img src="{{ public_url('images/resource/service3-1.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="inner-box">
                                        <div class="icon"><i class="flaticon-home-delivery"></i></div>
                                        <div class="content">
                                            <div class="h4 title"><a href="page-service-details.html">Residential Moving</a>
                                            </div>
                                            <div class="text">On the other hand, we denounce with righteous indignation
                                            </div>
                                        </div>
                                        <div class="counte">01</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-three swiper-slide">
                            <div class="inner-block">
                                <div class="image">
                                    <a href="page-service-details.html">
                                        <img src="{{ public_url('images/resource/service3-2.jpg') }}" alt="blog">
                                        <img src="{{ public_url('images/resource/service3-2.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="inner-box">
                                        <div class="icon"><i class="flaticon-delivery-man-2"></i></div>
                                        <div class="content">
                                            <div class="h4 title"><a href="page-service-details.html">Commercial Moving</a>
                                            </div>
                                            <div class="text">On the other hand, we denounce with righteous indignation
                                            </div>
                                        </div>
                                        <div class="counte">02</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-three swiper-slide">
                            <div class="inner-block">
                                <div class="image">
                                    <a href="page-service-details.html">
                                        <img src="{{ public_url('images/resource/service3-3.jpg') }}" alt="blog">
                                        <img src="{{ public_url('images/resource/service3-3.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="inner-box">
                                        <div class="icon"><i class="flaticon-delivery"></i></div>
                                        <div class="content">
                                            <div class="h4 title"><a href="page-service-details.html">Furniture
                                                    Disassembly</a></div>
                                            <div class="text">On the other hand, we denounce with righteous indignation
                                            </div>
                                        </div>
                                        <div class="counte">03</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-three swiper-slide">
                            <div class="inner-block">
                                <div class="image">
                                    <a href="page-service-details.html">
                                        <img src="{{ public_url('images/resource/service3-3.jpg') }}" alt="blog">
                                        <img src="{{ public_url('images/resource/service3-3.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="inner-box">
                                        <div class="icon"><i class="flaticon-cargo"></i></div>
                                        <div class="content">
                                            <div class="h4 title"><a href="page-service-details.html">Local Moving</a></div>
                                            <div class="text">On the other hand, we denounce with righteous indignation
                                            </div>
                                        </div>
                                        <div class="counte">04</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-three swiper-slide">
                            <div class="inner-block">
                                <div class="image">
                                    <a href="page-service-details.html">
                                        <img src="{{ public_url('images/resource/service3-2.jpg') }}" alt="blog">
                                        <img src="{{ public_url('images/resource/service3-2.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="inner-box">
                                        <div class="icon"><i class="flaticon-logistic"></i></div>
                                        <div class="content">
                                            <div class="h4 title"><a href="page-service-details.html">Commercial Moving</a>
                                            </div>
                                            <div class="text">On the other hand, we denounce with righteous indignation
                                            </div>
                                        </div>
                                        <div class="counte">05</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-three swiper-slide">
                            <div class="inner-block">
                                <div class="image">
                                    <a href="page-service-details.html">
                                        <img src="{{ public_url('images/resource/service3-3.jpg') }}" alt="blog">
                                        <img src="{{ public_url('images/resource/service3-3.jpg') }}" alt="blog">
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="inner-box">
                                        <div class="icon"><i class="flaticon-team"></i></div>
                                        <div class="content">
                                            <div class="h4 title"><a href="page-service-details.html">Furniture
                                                    Disassembly</a></div>
                                            <div class="text">On the other hand, we denounce with righteous indignation
                                            </div>
                                        </div>
                                        <div class="counte">06</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-two-dots"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end services-section-two -->

    <!-- start working-section-three  -->
    <section class="working-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title wow fadeInUp" data-wow-delay="200ms">
                        <div class="h6 sub-title">How It Works</div>
                        <div class="h2 title">Simple Process for <br>a <span>Smooth Move</span></div>
                    </div>
                    <div class="hiw-image-box wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ public_url('images/resource/how-it-work.jpg') }}" alt="">
                                <img src="{{ public_url('images/resource/how-it-work.jpg') }}" alt="">
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

    <!-- Funfact Section -->
    <section class="funfact-section pt-0">
        <div class="h4 funfact-title">Our Experience Speaks for Itself</div>
        <div class="container">
            <div class="inner-row">
                <div class="funfact-block">
                    <div class="inner-block">
                        <div class="text">Successful Moves <br>Completed</div>
                        <div class="h3 count-box"><span class="count-text" data-speed="3000" data-stop="1500">0</span>+
                        </div>
                    </div>
                </div>
                <div class="funfact-block">
                    <div class="inner-block">
                        <div class="text">Customer <br>Satisfaction Rate</div>
                        <div class="h3 count-box"><span class="count-text" data-speed="3000" data-stop="98">0</span>%</div>
                    </div>
                </div>
                <div class="funfact-block">
                    <div class="inner-block">
                        <div class="text">Local & Long-Distance <br>Routes Served</div>
                        <div class="h3 count-box"><span class="count-text" data-speed="3000" data-stop="4.9">0</span>/5
                        </div>
                    </div>
                </div>
                <div class="funfact-block">
                    <div class="inner-block">
                        <div class="text">Trained & <br>Professional Movers</div>
                        <div class="h3 count-box"><span class="count-text" data-speed="3000" data-stop="50">0</span>+</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Funfact Section -->

    <!-- Service Section -->
    <section class="services-section pt-0">
        <div class="outer-container">
            <div class="auto-container">
                <div class="sec-title">
                    <div class="row align-items-end">
                        <div class="col-xl-2">
                            <div class="h6 sub-title">Project</div>
                        </div>
                        <div class="col-xl-7">
                            <div class="h2 title">Our Most Recent <br>Moving <span>Projects Portfolio</span></div>
                        </div>
                        <div class="col-xl-3">
                            <div class="text">It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="outer-box" data-background="./images/resource/service1-bg1.jpg') }}">
                <div class="service-one-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- service-block -->
                            <div class="service-block" data-bg="./images/resource/service1-bg1.jpg') }}">
                                <div class="inner-box">
                                    <div class="content">
                                        <div class="h6 sub-title">
                                            <span class="text">Moving</span>
                                            <span class="text">Residential</span>
                                        </div>
                                        <div class="h3 title"><a href="page-projects.html">Complete Residential Home
                                                Move</a></div>
                                        <div class="text">It is a long established fact that a reader will be distracted by
                                            the readable</div>
                                        <div class="btn-box">
                                            <a class="btn-arrow" href="page-project-details.html">View Project <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- service-block -->
                            <div class="service-block" data-bg="./images/resource/service1-bg2.jpg') }}">
                                <div class="inner-box">
                                    <div class="content">
                                        <div class="h6 sub-title">
                                            <span class="text">Moving</span>
                                            <span class="text">Residential</span>
                                        </div>
                                        <div class="h3 title"><a href="page-projects.html">Full Office Relocation
                                                Project</a></div>
                                        <div class="text">It is a long established fact that a reader will be distracted by
                                            the readable</div>
                                        <div class="btn-box">
                                            <a class="btn-arrow" href="page-project-details.html">View Project <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- service-block -->
                            <div class="service-block" data-bg="./images/resource/service1-bg3.jpg') }}">
                                <div class="inner-box">
                                    <div class="content">
                                        <div class="h6 sub-title">
                                            <span class="text">Moving</span>
                                            <span class="text">Residential</span>
                                        </div>
                                        <div class="h3 title"><a href="page-projects.html">Long-Distance Household Move</a>
                                        </div>
                                        <div class="text">It is a long established fact that a reader will be distracted by
                                            the readable</div>
                                        <div class="btn-box">
                                            <a class="btn-arrow" href="page-project-details.html">View Project <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- service-block -->
                            <div class="service-block" data-bg="./images/resource/service1-bg4.jpg') }}">
                                <div class="inner-box">
                                    <div class="content">
                                        <div class="h6 sub-title">
                                            <span class="text">Moving</span>
                                            <span class="text">Residential</span>
                                        </div>
                                        <div class="h3 title"><a href="page-projects.html">Apartment-to-House Moving
                                                Service</a></div>
                                        <div class="text">It is a long established fact that a reader will be distracted by
                                            the readable</div>
                                        <div class="btn-box">
                                            <a class="btn-arrow" href="page-project-details.html">View Project <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- service-block -->
                            <div class="service-block" data-bg="./images/resource/service1-bg1.jpg') }}">
                                <div class="inner-box">
                                    <div class="content">
                                        <div class="h6 sub-title">
                                            <span class="text">Moving</span>
                                            <span class="text">Residential</span>
                                        </div>
                                        <div class="h3 title"><a href="page-projects.html">Complete Residential Home
                                                Move</a></div>
                                        <div class="text">It is a long established fact that a reader will be distracted by
                                            the readable</div>
                                        <div class="btn-box">
                                            <a class="btn-arrow" href="page-project-details.html">View Project <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- service-block -->
                            <div class="service-block" data-bg="./images/resource/service1-bg2.jpg') }}">
                                <div class="inner-box">
                                    <div class="content">
                                        <div class="h6 sub-title">
                                            <span class="text">Moving</span>
                                            <span class="text">Residential</span>
                                        </div>
                                        <div class="h3 title"><a href="page-projects.html">Full Office Relocation
                                                Project</a></div>
                                        <div class="text">It is a long established fact that a reader will be distracted by
                                            the readable</div>
                                        <div class="btn-box">
                                            <a class="btn-arrow" href="page-project-details.html">View Project <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- service-block -->
                            <div class="service-block" data-bg="./images/resource/service1-bg3.jpg') }}">
                                <div class="inner-box">
                                    <div class="content">
                                        <div class="h6 sub-title">
                                            <span class="text">Moving</span>
                                            <span class="text">Residential</span>
                                        </div>
                                        <div class="h3 title"><a href="page-projects.html">Long-Distance Household Move</a>
                                        </div>
                                        <div class="text">It is a long established fact that a reader will be distracted by
                                            the readable</div>
                                        <div class="btn-box">
                                            <a class="btn-arrow" href="page-project-details.html">View Project <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- service-block -->
                            <div class="service-block" data-bg="./images/resource/service1-bg4.jpg') }}">
                                <div class="inner-box">
                                    <div class="content">
                                        <div class="h6 sub-title">
                                            <span class="text">Moving</span>
                                            <span class="text">Residential</span>
                                        </div>
                                        <div class="h3 title"><a href="page-projects.html">Apartment-to-House Moving
                                                Service</a></div>
                                        <div class="text">It is a long established fact that a reader will be distracted by
                                            the readable</div>
                                        <div class="btn-box">
                                            <a class="btn-arrow" href="page-project-details.html">View Project <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="arrow-box">
                        <button class="slider-prev">
                            <i class="fa-regular fa-arrow-left"></i>
                        </button>
                        <button class="slider-next">
                            <i class="fa-regular fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- start why-choose-us-section -->
    <section class="why-choose-us-section pb-90 pt-0">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="h6 sub-title">Why Choose Us</div>
                <div class="h2 title">Why Choose Our <span>Moving Experts?</span></div>
                <div class="text">It is a long established fact that a reader will be distracted by the readable content of
                    a page when looking at its layout. </div>
            </div>
            <div class="row">
                <div class="image-column col-xl-4 col-lg-4">
                    <div class="inner-column">
                        <div class="image"><img src="{{ public_url('images/resource/wcu1-1.jpg') }}" alt=""></div>
                    </div>
                </div>
                <div class="content-column col-xl-5 col-lg-8">
                    <div class="inner-column">
                        <div class="feature-item">
                            <div class="inner-block">
                                <div class="icon"><i class="flaticon-shipment"></i></div>
                                <div class="content">
                                    <div class="h4 title"><a href="page-service-details.html">Transparent & Fair Pricing</a>
                                    </div>
                                    <div class="text">Our experienced movers handle every item with care, ensuring a smooth
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="inner-block active">
                                <div class="icon"><i class="flaticon-delivery-man-1"></i></div>
                                <div class="content">
                                    <div class="h4 title"><a href="page-service-details.html">Professional & Experienced
                                            Team</a></div>
                                    <div class="text">Our experienced movers handle every item with care, ensuring a smooth
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="inner-block">
                                <div class="icon"><i class="flaticon-delivery-man"></i></div>
                                <div class="content">
                                    <div class="h4 title"><a href="page-service-details.html">Fast & On-Time Service</a>
                                    </div>
                                    <div class="text">Our experienced movers handle every item with care, ensuring a smooth
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="inner-block">
                                <div class="icon"><i class="flaticon-cash-on-delivery"></i></div>
                                <div class="content">
                                    <div class="h4 title"><a href="page-service-details.html">Fully Insured & Secure</a>
                                    </div>
                                    <div class="text">Our experienced movers handle every item with care, ensuring a smooth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="anim-shape"><img src="{{ public_url('images/icons/wcu1-1.png') }}" alt=""></div>
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
                                <div class="h2 title">Answers Most <br>Common <span>Queries!</span></div>
                            </div>
                            <div class="content-box">
                                <div class="inner-box">
                                    <div class="h3 title">Have Any Question on Your Minds?</div>
                                    <a href="page-contact.html" class="theme-btn btn-style-five">Get In Touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-column col-lg-7">
                        <div class="inner-column wow fadeInUp" data-wow-delay="200ms">
                            <div class="faq-box">
                                <div class="inner-box">
                                    <ul class="accordion-box">
                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn">How early should I book my moving date?
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">The amount you can save with solar depends on several
                                                        key factors, but many homeowners save anywhere from 40% to 100% on
                                                        their electricity</div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--Block-->
                                        <li class="accordion block active-block">
                                            <div class="acc-btn active">Do you provide free estimates for moving services?
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                            <div class="acc-content current">
                                                <div class="content">
                                                    <div class="text">The amount you can save with solar depends on several
                                                        key factors, but many homeowners save anywhere from 40% to 100% on
                                                        their electricity</div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn">Can you move large items like pianos or safes?
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">The amount you can save with solar depends on several
                                                        key factors, but many homeowners save anywhere from 40% to 100% on
                                                        their electricity</div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn">Should I pack my belongings myself or let the movers do it?
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">The amount you can save with solar depends on several
                                                        key factors, but many homeowners save anywhere from 40% to 100% on
                                                        their electricity</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end faq-section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="outer-container">
            <div class="sec-title text-center">
                <div class="h6 sub-title">Testimonial</div>
                <div class="h2 title">The Best Customers Says <br>About <span>Our Action</span></div>
            </div>
            <div class="row gx-4">
                <div class="col-xl-6">
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="logo"><img src="{{ public_url('images/icons/testi1-1.png') }}" alt=""></div>
                                <div class="h4 focus-text">The team was incredibly professional</div>
                                <div class="h5 text">“The team handled every piece of furniture with care and attention.
                                    They were punctual, friendly, and made the whole move effortless”</div>
                                <div class="info-box">
                                    <div class="user-info">
                                        <div class="h5 name">Emily Carter</div>
                                        <span class="designation">Senior Project Manager</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <figure class="image-box">
                                <img src="{{ public_url('images/resource/testimonial1-1.jpg') }}" alt="">
                                <a href="https://www.youtube.com/watch?v=Lplq8RjQ0zU" data-fancybox="gallery"
                                    class="video-btn playbtnanim"><i class="fa-sharp fa-solid fa-play"></i></a>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="logo"><img src="{{ public_url('images/icons/testi1-1.png') }}" alt=""></div>
                                <div class="h4 focus-text">The team was incredibly professional</div>
                                <div class="h5 text">“The team handled every piece of furniture with care and attention.
                                    They were punctual, friendly, and made the whole move effortless”</div>
                                <div class="info-box">
                                    <div class="user-info">
                                        <div class="h5 name">Emily Carter</div>
                                        <span class="designation">Senior Project Manager</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <figure class="image-box">
                                <img src="{{ public_url('images/resource/testimonial1-2.jpg') }}" alt="">
                                <a href="https://www.youtube.com/watch?v=Lplq8RjQ0zU" data-fancybox="gallery"
                                    class="video-btn playbtnanim"><i class="fa-sharp fa-solid fa-play"></i></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- start video-section -->
    <section class="video-section">
        <div class="outer-box">
            <div class="bg-image wow reveal-top tm-gsap-img-parallax overflow-hidden"><img
                    src="{{ public_url('images/resource/video1-1.jpg') }}" alt=""></div>
            <div class="video-box wow fadeInUp animated animated" data-wow-delay="200ms">
                <a class="play-now-one play-now" href="https://www.youtube.com/watch?v=hddwAIXbKZo" data-fancybox="gallery"
                    data-caption="">
                    <i class="fa-sharp fa-solid fa-play"></i>
                </a>
            </div>
            <div class="content">
                <div class="title">Experience the Quality Behind Our Service</div>
            </div>
        </div>
    </section>
    <!-- end video-section -->

    <!-- start blog-section -->
    <section class="blog-section">
        <div class="auto-container">
            <div class="sec-title-box">
                <div class="sec-title">
                    <div class="h6 sub-title">Our Blog</div>
                    <div class="h2 title">Check out latest <br>news <span>update & articles</span></div>
                </div>
                <a href="news-grid.html" class="theme-btn btn-style-three">See All Article<i
                        class="fa-light fa-arrow-up-right"></i></a>
            </div>
            <div class="row gx-4">
                <div class="blog-block col-xl-4 col-md-6">
                    <div class="inner-block">
                        <div class="image-box">
                            <div class="image">
                                <a href="news-details.html">
                                    <img src="{{ public_url('images/resource/blog1-1.jpg') }}" alt="blog">
                                    <img src="{{ public_url('images/resource/blog1-1.jpg') }}" alt="blog">
                                </a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="post-meta">
                                <div class="category">Moving</div>
                                <div class="date">20 Dec, 2025</div>
                            </div>
                            <div class="h3 title"><a href="news-details.html">How to Pack Fragile Items the Right Way</a>
                            </div>
                            <a class="btn-read-more" href="news-details.html"><i class="fa-regular fa-arrow-right"></i> Read
                                More </a>
                        </div>
                    </div>
                </div>
                <div class="blog-block col-xl-4 col-md-6">
                    <div class="inner-block">
                        <div class="image-box">
                            <div class="image">
                                <a href="news-details.html">
                                    <img src="{{ public_url('images/resource/blog1-2.jpg') }}" alt="blog">
                                    <img src="{{ public_url('images/resource/blog1-2.jpg') }}" alt="blog">
                                </a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="post-meta">
                                <div class="category">Moving</div>
                                <div class="date">20 Dec, 2025</div>
                            </div>
                            <div class="h3 title"><a href="news-details.html">The Ultimate Checklist Before You Move</a>
                            </div>
                            <a class="btn-read-more" href="news-details.html"><i class="fa-regular fa-arrow-right"></i> Read
                                More </a>
                        </div>
                    </div>
                </div>
                <div class="blog-block col-xl-4 col-md-6">
                    <div class="inner-block">
                        <div class="image-box">
                            <div class="image">
                                <a href="news-details.html">
                                    <img src="{{ public_url('images/resource/blog1-3.jpg') }}" alt="blog">
                                    <img src="{{ public_url('images/resource/blog1-3.jpg') }}" alt="blog">
                                </a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="post-meta">
                                <div class="category">Moving</div>
                                <div class="date">20 Dec, 2025</div>
                            </div>
                            <div class="h3 title"><a href="news-details.html">The Best Packing Materials for Safe Moving</a>
                            </div>
                            <a class="btn-read-more" href="news-details.html"><i class="fa-regular fa-arrow-right"></i> Read
                                More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog-section -->

@endsection