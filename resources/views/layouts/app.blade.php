<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="utf-8" />
  <!-- Character Encoding -->
    <meta charset="UTF-8">
    <meta name="author" content="MoveSmartPlus">
    <meta name="theme-color" content="#0F52BA">
    <meta http-equiv="content-language" content="en">

    <meta property="og:url" content="https://movesmartplus.com/">
    <meta property="og:site_name" content="MoveSmartPlus">
    <meta property="og:image" content="{{public_url('images/smart-move-plus.png')}}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_IN">

   
      <title>{{ $seo['title'] ?? config('app.name') }}</title>

      <meta name="description" content="{{ $seo['description'] ?? 'MoveSmartPlus provides trusted packers and movers services across India including house shifting, office relocation, bike transport, car transport, packing, loading, unloading, and storage. Get instant free quotes today.' }}">

      <meta name="keywords" content="{{ $seo['keywords'] ?? 'packers and movers, house shifting, office relocation, bike transport, car transport, movers and packers, relocation services, household shifting, moving company India' }}">

      <meta name="robots" content="{{ $seo['robots'] ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' }}">

      <link rel="canonical" href="{{ $seo['canonical'] ?? url()->current() }}">

      <meta property="og:type" content="website">

      <meta property="og:title" content="{{ $seo['og_title'] ?? 'MoveSmartPlus | Trusted Packers and Movers in India' }}">

      <meta property="og:description" content="{{ $seo['og_description'] ?? 'Book professional packers and movers, house shifting, office relocation, bike transport and car transport services across India.' }}">

      <meta property="og:image" content="{{ $seo['og_image'] ?? asset('images/logo.png') }}">

      <meta property="og:url" content="{{ $seo['og_url'] ?? url()->current() }}">

      <meta property="og:site_name" content="MoveSmartPlus">

      <meta name="twitter:card" content="summary_large_image">

      <meta name="twitter:title" content="{{ $seo['twitter_title'] ?? 'MoveSmartPlus | Packers and Movers'}}">

      <meta name="twitter:description" content="{{ $seo['twitter_description'] ?? 'Professional relocation services across India.' }}">

      <meta name="twitter:image" content="{{ $seo['twitter_image'] ?? public_url('images/smart-move-plus.png') }}">
      <!-- Mobile -->
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="default">

      <!-- Manifest -->
      <link rel="manifest" href="/manifest.json">

      <!-- DNS Prefetch -->
      <link rel="dns-prefetch" href="//fonts.googleapis.com">
      <link rel="dns-prefetch" href="//fonts.gstatic.com">

      <!-- Preconnect -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
  <!-- Stylesheets -->
  <link href="{{ public_url('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ public_url('css/style.css') }}" rel="stylesheet" />

  <link rel="shortcut icon" href="{{ public_url('images/favicon.png') }}" type="image/x-icon" />

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"MovingCompany",
      "name":"MoveSmartPlus",
      "url":"https://movesmartplus.com",
      "logo":"https://movesmartplus.com/public/images/logo.png",
      "image":"https://movesmartplus.com/public/images/og-image.jpg",
      "telephone":"+91- 6204847381",
      "email":"info@movesmartplus.com",
      "description":"Professional packers and movers providing house shifting, office relocation, bike transport and car transport across India.",
      "areaServed":"India",
      "priceRange":"₹₹"
    }
    </script>
  <style>
      .main-header .logo img {
        max-width: 80%;
        height: auto;
        width: 300px;
    }
  </style>
    @yield('style')
</head>
<body>
    <div class="page-wrapper">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </div>
    

    

    <script src="{{ public_url('js/jquery.js')}}"></script>    
    <script src="{{ public_url('js/popper.min.js') }}"></script>
    <script src="{{ public_url('js/bootstrap.min.js') }}"></script>
    <script src="{{ public_url('js/jquery.fancybox.js') }}"></script>
    <script src="{{ public_url('js/jquery-ui.js') }}"></script>
    <script src="{{ public_url('js/wow.js') }}"></script>
    <script src="{{ public_url('js/select2.min.js') }}"></script>
    <script src="{{ public_url('js/appear.js') }}"></script>
    <script src="{{ public_url('js/bxslider.js') }}"></script>
    <script src="{{ public_url('js/knob.js') }}"></script>
    <script src="{{ public_url('js/swiper.min.js') }}"></script>
    <script src="{{ public_url('js/aos.js') }}"></script>
    <script src="{{ public_url('js/gsap.min.js') }}"></script>
    <script src="{{ public_url('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ public_url('js/splitType.js') }}"></script>
    <script src="{{ public_url('js/gsap-scroll-smoother.js') }}"></script>
    <script src="{{ public_url('js/gsap-scroll-to-plugin.js') }}"></script>
    <script src="{{ public_url('js/SplitText.min.js') }}"></script>
    <script src="{{ public_url('js/custom-gsap.js') }}"></script>
    <script src="{{ public_url('js/script.js') }}"></script>
    @stack('scripts')

</body>
</html>