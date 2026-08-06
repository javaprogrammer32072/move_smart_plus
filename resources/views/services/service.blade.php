@extends('layouts.app')

@section('title', 'Packers and Movers Services in India | MoveSmartPlus')
@section('style')
<style>
    .services-section{
    background:#f8fafc;
}

.service-card{
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    transition:.35s;
    height:100%;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.service-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 40px rgba(0,0,0,.15);
}

.service-img{
    overflow:hidden;
    height:240px;
}

.service-img img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.5s;
}

.service-card:hover img{
    transform:scale(1.08);
}

.service-content{
    padding:30px;
}

.service-icon{
    width:70px;
    height:70px;
    background:#ff6b00;
    color:#fff;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    margin-bottom:20px;
}

.service-content h4{
    font-weight:700;
    margin-bottom:15px;
}

.service-content p{
    color:#777;
}

.service-content ul{
    margin:20px 0;
    padding-left:18px;
}

.service-content ul li{
    margin-bottom:8px;
    color:#555;
}

.service-content a{
    color:#ff6b00;
    font-weight:700;
    text-decoration:none;
}

.section-tag{
    background:#fff1e8;
    color:#ff6b00;
    padding:8px 18px;
    border-radius:50px;
    font-weight:600;
}

@media(max-width:768px){

.service-img{
    height:200px;
}

.service-content{
    padding:22px;
}

}
</style>
@endsection
@section('content')

  <!-- Start main-content -->
  <section class="page-title"
    style="background-image: url(images/resource/page-title.png);opacity: 0.85;background-color: var(--theme-color-lighter);">
    <div class="auto-container">
      <div class="title-outer text-center">
        <div class="h1 title">Our Services</div>
        <ul class="page-breadcrumb">
          <li><a href="{{url('')}}">Home</a></li>
          <li>Services</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- end main-content -->

  <!--Contact Details Start-->
  <section class="services-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-tag">Our Services</span>
            <h2 class="fw-bold">Professional Packers & Movers Services</h2>

            <p class="text-muted">
                Safe, reliable and affordable moving solutions for homes,
                offices, vehicles and businesses across India.
            </p>
        </div>

        <div class="row g-4">

            <!-- Home Shifting -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">

                    <div class="service-img">
                        <img src="{{ public_url('images/services/home-shifting.png') }}" alt="">
                    </div>

                    <div class="service-content">

                        <div class="service-icon">
                            <i class="flaticon-home-delivery"></i>
                        </div>

                        <h4>Home Shifting</h4>

                        <p>
                            Safe and secure household shifting with professional
                            packing, loading, transportation and unpacking.
                        </p>

                        <ul>
                            <li>Professional Packing</li>
                            <li>Loading & Unloading</li>
                            <li>Doorstep Delivery</li>
                        </ul>

                        <a href="{{ url('/services/home-shifting') }}">Learn More →</a>

                    </div>
                </div>
            </div>

            <!-- Office Relocation -->

            <div class="col-lg-4 col-md-6">
                <div class="service-card">

                    <div class="service-img">
                        <img src="{{ public_url('images/services/office-relocation.png') }}">
                    </div>

                    <div class="service-content">

                        <div class="service-icon">
                            <i class="flaticon-delivery-man-2"></i>
                        </div>

                        <h4>Office Relocation</h4>

                        <p>
                            Fast office relocation with minimum business downtime.
                        </p>

                        <ul>
                            <li>IT Equipment</li>
                            <li>Furniture Moving</li>
                            <li>Weekend Relocation</li>
                        </ul>

                        <a href="#">Learn More →</a>

                    </div>

                </div>
            </div>

            <!-- Warehouse -->

            <div class="col-lg-4 col-md-6">
                <div class="service-card">

                    <div class="service-img">
                        <img src="{{ public_url('images/services/warehouse.png') }}">
                    </div>

                    <div class="service-content">

                        <div class="service-icon">
                            <i class="flaticon-cargo"></i>
                        </div>

                        <h4>Warehouse Storage</h4>

                        <p>
                            Secure warehouse and storage facilities for short and
                            long-term needs.
                        </p>

                        <ul>
                            <li>24×7 Security</li>
                            <li>Clean Warehouse</li>
                            <li>Affordable Plans</li>
                        </ul>

                        <a href="#">Learn More →</a>

                    </div>

                </div>
            </div>

            <!-- Local Moving -->

            <div class="col-lg-4 col-md-6">
                <div class="service-card">

                    <div class="service-img">
                        <img src="{{ public_url('images/services/local-moving.png') }}">
                    </div>

                    <div class="service-content">

                        <div class="service-icon">
                            <i class="flaticon-delivery"></i>
                        </div>

                        <h4>Local Moving</h4>

                        <p>
                            Quick and affordable local shifting within your city.
                        </p>

                        <ul>
                            <li>Same Day Service</li>
                            <li>Experienced Team</li>
                            <li>Affordable Pricing</li>
                        </ul>

                        <a href="#">Learn More →</a>

                    </div>

                </div>
            </div>

            <!-- Car Transport -->

            <div class="col-lg-4 col-md-6">
                <div class="service-card">

                    <div class="service-img">
                        <img src="{{ public_url('images/services/car-transport.png') }}">
                    </div>

                    <div class="service-content">

                        <div class="service-icon">
                            <i class="flaticon-cargo"></i>
                        </div>

                        <h4>Car Transportation</h4>

                        <p>
                            Safe enclosed and open car carrier transportation.
                        </p>

                        <ul>
                            <li>Door Pickup</li>
                            <li>Vehicle Insurance</li>
                            <li>Live Tracking</li>
                        </ul>

                        <a href="#">Learn More →</a>

                    </div>

                </div>
            </div>

            <!-- Bike -->

            <div class="col-lg-4 col-md-6">
                <div class="service-card">

                    <div class="service-img">
                        <img src="{{ public_url('images/services/bike-transport.png') }}">
                    </div>

                    <div class="service-content">

                        <div class="service-icon">
                            <i class="flaticon-delivery"></i>
                        </div>

                        <h4>Bike Transport</h4>

                        <p>
                            Damage-free bike transportation across India.
                        </p>

                        <ul>
                            <li>Premium Packing</li>
                            <li>Safe Transit</li>
                            <li>On-time Delivery</li>
                        </ul>

                        <a href="#">Learn More →</a>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
  <!--Contact Details End-->

@endsection