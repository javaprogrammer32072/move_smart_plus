@extends('layouts.app')

@section('title', 'Contact Us Page')

@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/resource/page-title.png);opacity: 0.85;background-color: var(--theme-color-lighter);">
      <div class="auto-container">
        <div class="title-outer text-center">
          <div class="h1 title">Contact</div>
          <ul class="page-breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

  <!--Contact Details Start-->
  <section class="contact-details">
    <div class="container pt-110 pb-70">
      <div class="row">
        <div class="col-xl-7 col-lg-6">
          <div class="sec-title black">
            <div class="h2">Feel free to write</div>
          </div>
          <!-- Contact Form -->
          @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form id="contact_form" name="contact_form" action="{{ route('contact.store') }}" method="POST">

    @csrf

    <div class="row">

        <div class="col-sm-6">
            <div class="mb-3">

                <input
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    type="text"
                    placeholder="Enter Name"
                    value="{{ old('name') }}">

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
        </div>

        <div class="col-sm-6">
            <div class="mb-3">

                <input
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    type="email"
                    placeholder="Enter Email"
                    value="{{ old('email') }}">

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-sm-6">
            <div class="mb-3">

                <input
                    name="subject"
                    class="form-control @error('subject') is-invalid @enderror"
                    type="text"
                    placeholder="Enter Subject"
                    value="{{ old('subject') }}">

                @error('subject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
        </div>

        <div class="col-sm-6">
            <div class="mb-3">

                <input
                    name="phone"
                    class="form-control @error('phone') is-invalid @enderror"
                    type="text"
                    placeholder="Enter Phone"
                    value="{{ old('phone') }}">

                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
        </div>

    </div>

    <div class="mb-3">

        <textarea
            name="message"
            rows="7"
            class="form-control @error('message') is-invalid @enderror"
            placeholder="Enter Message">{{ old('message') }}</textarea>

        @error('message')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="mb-5">

        <button
            type="submit"
            class="theme-btn btn-style-four">

            <span class="btn-title">
                Send Message
            </span>

        </button>

        <button
            type="reset"
            class="theme-btn btn-style-four">

            <span class="btn-title">
                Reset
            </span>

        </button>

    </div>

</form>
          <!-- Contact Form Validation-->
        </div>
        <div class="col-xl-5 col-lg-6">
          <div class="contact-details__right">
            <div class="sec-title black">
              <div class="h2">Get in touch with us</div>
              <div class="text">Lorem ipsum is simply free text available dolor sit amet consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.</div>
            </div>
            <ul class="list-unstyled contact-details__info">
              <li>
                <div class="icon">
                  <span class="fa-classic fa-light fa-phone-plus"></span>
                </div>
                <div class="text">
                  <div class="h6 mb-1">Have any question?</div>
                  <a href="tel:980089850"><span>Free</span> +92 (020)-9850</a>
                </div>
              </li>
              <li>
                <div class="icon">
                  <span class="fal fa-envelope"></span>
                </div>
                <div class="text">
                  <div class="h6 mb-1">Write email</div>
                  <a href="https://html.kodesolution.com/cdn-cgi/l/email-protection#157b7070717d70796555767a7865747b6c3b767a78"><span class="__cf_email__" data-cfemail="28464d4d4c404d4458684b474558494651064b4745">[email&#160;protected]</span></a>
                </div>
              </li>
              <li>
                <div class="icon">
                  <span class="fal fa-location-arrow"></span>
                </div>
                <div class="text">
                  <div class="h6 mb-1">Visit anytime</div>
                  <span>66 broklyn golden street. New York</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Details End-->

@endsection