<!-- <div class="preloader"></div> -->
<div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>
</div>
<!-- Back-to-top start -->

<!-- Main Header-->
<header class="main-header header-style-three">
    <div class="outer-box">
        <div class="header-lower anim-fade-move" data-delay="0.25">
            <div class="inner-container">
                <!-- Main box -->
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo">
                           <img src="{{ public_url('images/smart-move-plus.png')}}" alt="Logo" />
                        </div>
                    </div>
                    <!--<div class="logo-box">-->
                    <!--    <div class="logo">-->
                    <!--        <a href="index.html"><img src="{{ public_url('images/smart-move-plus.png')}}" alt="Logo" /></a>-->
                    <!--    </div>-->
                    <!--</div>-->

                </div>
                <!--Nav Box-->
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation">
                            <li class="current dropdown">
                                <a href="/">Home</a>
                            </li>
                            <li class="dropdown"><a href="#">Pages</a>
                                <ul>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('mission') }}">Our Mission</a></li>
                                    <li><a href="{{ route('timeline') }}">Timeline</a></li>
                                    <li><a href="{{ route('help-center') }}">Faq</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{ url('/services') }}">Our Services</a>
                            </li>
                            <li class="dropdown"><a href="#">Projects</a>
                               
                            </li>
                            <li class="dropdown"><a href="{{ route('blogs.index') }}">Blog</a>
                            </li>
                            <li><a href="/contact-us">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="right-box">
                    <a class="theme-btn btn-style-five" href="/">
                        <span class="btn-title">Book Now</span>
                    </a>
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="#"><img src="{{ public_url('images/smart-move-plus.png')}}" alt="" /></a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>
            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <i class="icon fa-regular fa-envelope"></i>
                    <span class="title">Send Email</span>
                    <div class="text"><a
                            href="#"><span
                                class="__cf_email__"
                                data-cfemail="e8868d8d8c808d8498a88b878598898691c68b8785">[email&#160;protected]</span></a>
                    </div>
                </li>
            </ul>
            <ul class="social-links">
                <li>
                    <a href="#"><i class="icon fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon fab fa-pinterest-p"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon fab fa-vimeo-v"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="#">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="#"><img src="{{ public_url('images/smart-move-plus.png')}}" alt=""></a>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <a href="tel:+917070784447" class="header-phone_box">
                    <span class="icon"><i aria-hidden="true" class="fas fa-phone-alt"></i></span>
                    <span class="info">
                        Call Anytime
                        <strong>+91 7070784447</strong>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->
</header>