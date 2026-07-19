@extends('layouts.app')

@section('title', 'Inventory Details')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    :root{
        --navy:#0F1C3F;
        --navy-light:#1F3468;
        --amber:#F5A524;
        --amber-dark:#D98C0F;
        --coral:#FF6B4A;
        --teal:#0FBFA0;
        --bg-soft:#F3F5FA;
        --surface:#FFFFFF;
        --text-main:#1B2030;
        --text-muted:#727A8C;
        --border:#E7E9F0;
        --radius-lg:20px;
        --radius-md:14px;
        --radius-sm:10px;
        --font-display:'Poppins', sans-serif;
        --font-body:'Inter', sans-serif;
    }

    .inv-page{
        background:
            radial-gradient(circle at 8% 12%, rgba(245,165,36,0.06) 0, transparent 40%),
            radial-gradient(circle at 92% 88%, rgba(15,191,160,0.06) 0, transparent 40%),
            var(--bg-soft);
        font-family: var(--font-body);
    }

    .inv-shell{
        background:var(--surface);
        border-radius: var(--radius-lg);
        overflow:hidden;
        box-shadow: 0 20px 50px -12px rgba(15,28,63,0.18);
    }

    /* ---- Header ---- */
    .inv-header{
        position:relative;
        background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%);
        padding: 34px 36px 30px;
        color:#fff;
        overflow:hidden;
    }

    .inv-header::before{
        content:"";
        position:absolute;
        inset:0;
        background-image: radial-gradient(rgba(255,255,255,0.08) 1.5px, transparent 1.5px);
        background-size: 18px 18px;
        opacity:.5;
        pointer-events:none;
    }

    .inv-header::after{
        content:"";
        position:absolute;
        width:340px; height:340px;
        background: radial-gradient(circle, rgba(245,165,36,0.25), transparent 70%);
        top:-160px; right:-100px;
        border-radius:50%;
        pointer-events:none;
    }

    .inv-header-top{
        position:relative;
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:20px;
        flex-wrap:wrap;
        margin-bottom:26px;
    }

    .inv-brand{ display:flex; align-items:center; gap:14px; }

    .inv-logo{
        width:52px; height:52px;
        border-radius:14px;
        background:#fff;
        display:flex; align-items:center; justify-content:center;
        flex-shrink:0;
        font-weight:800;
        font-family: var(--font-display);
        color:var(--navy);
        font-size:1.2rem;
        overflow:hidden;
        box-shadow: 0 6px 18px rgba(0,0,0,0.18);
    }

    .inv-logo img{ width:100%; height:100%; object-fit:contain; }

    .inv-brand-name{
        font-size:0.82rem;
        font-weight:600;
        letter-spacing:.06em;
        text-transform:uppercase;
        opacity:.75;
        margin:0;
    }

    .inv-title{
        font-family: var(--font-display);
        font-size:1.55rem;
        font-weight:700;
        margin:2px 0 0;
        letter-spacing:-.01em;
    }

    .inv-badge{
        background: var(--amber);
        color:var(--navy);
        padding:7px 16px;
        border-radius:999px;
        font-size:0.76rem;
        font-weight:700;
        letter-spacing:.05em;
        text-transform:uppercase;
        white-space:nowrap;
        box-shadow: 0 4px 12px rgba(245,165,36,0.35);
    }

    .inv-booking-no{
        font-size:0.84rem;
        opacity:.8;
        margin-top:8px;
        text-align:right;
    }

    .inv-booking-no strong{ color:#fff; }

    /* ---- Step indicator ---- */
    .inv-steps{
        position:relative;
        display:flex;
        gap:8px;
    }

    .inv-step{
        flex:1;
        display:flex;
        align-items:center;
        gap:10px;
        padding:10px 14px;
        border-radius:12px;
        background: rgba(255,255,255,0.06);
        border:1px solid rgba(255,255,255,0.12);
    }

    .inv-step.is-done{ background: rgba(15,191,160,0.14); border-color: rgba(15,191,160,0.4); }
    .inv-step.is-current{ background: rgba(245,165,36,0.16); border-color: var(--amber); }

    .inv-step-icon{
        width:26px; height:26px;
        border-radius:50%;
        display:flex; align-items:center; justify-content:center;
        flex-shrink:0;
        background: rgba(255,255,255,0.15);
        font-size:0.75rem;
        font-weight:700;
    }

    .inv-step.is-done .inv-step-icon{ background:var(--teal); color:#fff; }
    .inv-step.is-current .inv-step-icon{ background:var(--amber); color:var(--navy); }

    .inv-step-label{
        font-size:0.78rem;
        font-weight:600;
        color:#fff;
        opacity:.9;
        white-space:nowrap;
    }

    @media (max-width:576px){
        .inv-step-label{ display:none; }
        .inv-step{ justify-content:center; padding:10px; }
    }

    /* ---- Body ---- */
    .inv-body{ padding: 36px; }

    @media (max-width:576px){
        .inv-header{ padding:26px 20px 22px; }
        .inv-body{ padding:24px 18px; }
    }

    /* ---- Section headings ---- */
    .inv-section-head{
        display:flex;
        align-items:center;
        gap:12px;
        margin: 8px 0 22px;
    }

    .inv-section-head .icon-badge{
        width:38px; height:38px;
        border-radius:11px;
        display:flex; align-items:center; justify-content:center;
        background: rgba(245,165,36,0.12);
        color: var(--amber-dark);
        flex-shrink:0;
    }

    .inv-section-head h2{
        font-family: var(--font-display);
        font-size:1.08rem;
        font-weight:700;
        color: var(--navy);
        margin:0;
    }

    .inv-section-head .sub{
        font-size:0.8rem;
        color: var(--text-muted);
        margin:0;
    }

    .inv-section-head .line{
        flex:1;
        height:0;
        border-top:1.5px dashed var(--border);
        margin-left:6px;
    }

    /* ---- Form fields ---- */
    .form-label{
        font-weight:600;
        font-size:0.84rem;
        color: var(--text-main);
        margin-bottom:6px;
        display:flex;
        align-items:center;
        gap:6px;
    }

    .form-label svg{ color:var(--amber-dark); flex-shrink:0; }

    .form-select, .form-control{
        border-radius: var(--radius-sm);
        border:1.5px solid var(--border);
        padding:11px 14px;
        font-size:0.92rem;
        font-family: var(--font-body);
        transition: border-color .15s ease, box-shadow .15s ease;
    }

    .form-select:focus, .form-control:focus{
        border-color: var(--amber);
        box-shadow: 0 0 0 4px rgba(245,165,36,0.16);
    }

    .form-select.is-invalid, .form-control.is-invalid{ border-color:#DC3545; }

    /* ---- Service chips ---- */
    .service-chip{ position:relative; }

    .service-chip input{
        position:absolute;
        opacity:0;
        width:100%; height:100%;
        margin:0;
        cursor:pointer;
        z-index:2;
    }

    .service-chip label{
        display:flex;
        align-items:center;
        gap:12px;
        padding:14px 16px;
        border:1.5px solid var(--border);
        border-radius: var(--radius-md);
        font-size:0.88rem;
        font-weight:600;
        color: var(--text-main);
        background:#fff;
        transition: all .18s ease;
        cursor:pointer;
        margin:0;
        height:100%;
    }

    .service-chip .icon{
        width:36px; height:36px;
        border-radius:10px;
        display:flex; align-items:center; justify-content:center;
        background: var(--bg-soft);
        color: var(--navy);
        flex-shrink:0;
        transition: all .18s ease;
    }

    .service-chip label:hover{ border-color: rgba(245,165,36,0.5); transform: translateY(-1px); }

    .service-chip input:checked + label{
        border-color: var(--amber);
        background: rgba(245,165,36,0.08);
        color: var(--amber-dark);
        box-shadow: 0 6px 14px rgba(245,165,36,0.14);
    }

    .service-chip input:checked + label .icon{
        background: var(--amber);
        color:#fff;
    }

    .service-chip .check{
        margin-left:auto;
        width:20px; height:20px;
        border-radius:50%;
        border:1.5px solid var(--border);
        flex-shrink:0;
        display:flex; align-items:center; justify-content:center;
        transition: all .18s ease;
    }

    .service-chip input:checked + label .check{
        background: var(--teal);
        border-color: var(--teal);
        color:#fff;
    }

    /* ---- Inventory ---- */
    .inv-category{
        border:1.5px solid var(--border);
        border-radius: var(--radius-md);
        margin-bottom:18px;
        overflow:hidden;
        transition: box-shadow .15s ease;
    }

    .inv-category:hover{ box-shadow: 0 8px 24px rgba(15,28,63,0.06); }

    .inv-category-header{
        background: linear-gradient(90deg, var(--bg-soft), #fff);
        padding:14px 20px;
        font-weight:700;
        font-family: var(--font-display);
        color: var(--navy);
        font-size:0.94rem;
        border-bottom:1.5px solid var(--border);
        display:flex;
        align-items:center;
        gap:10px;
    }

    .inv-category-header .dot{
        width:8px; height:8px;
        border-radius:50%;
        background: var(--amber);
        flex-shrink:0;
    }

    .inv-item-row{
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:14px;
        padding:12px 14px;
        border:1.5px solid var(--border);
        border-radius: var(--radius-sm);
        height:100%;
        transition: border-color .15s ease;
    }

    .inv-item-row:has(.inventory:checked){
        border-color: rgba(245,165,36,0.5);
        background: rgba(245,165,36,0.04);
    }

    .inv-item-row .form-check-label{ font-size:0.9rem; font-weight:500; }

    .inv-item-row .form-check-input{
        width:18px; height:18px;
        border-radius:5px;
        border:1.5px solid var(--border);
    }

    .inv-item-row .form-check-input:checked{
        background-color: var(--amber);
        border-color: var(--amber);
    }

    .qty-stepper{
        display:flex;
        align-items:center;
        border:1.5px solid var(--border);
        border-radius: var(--radius-sm);
        overflow:hidden;
    }

    .qty-stepper button{
        width:30px; height:34px;
        border:none;
        background:#fff;
        color: var(--navy);
        font-weight:700;
        font-size:1rem;
        line-height:1;
        cursor:pointer;
        transition: background .12s ease;
    }

    .qty-stepper button:hover{ background: var(--bg-soft); }
    .qty-stepper button:disabled{ opacity:.4; cursor:not-allowed; }

    .qty-input{
        width:44px !important;
        text-align:center;
        border:none !important;
        border-left:1.5px solid var(--border) !important;
        border-right:1.5px solid var(--border) !important;
        border-radius:0 !important;
        padding:0 !important;
        height:34px;
        font-weight:600;
    }

    .qty-input:focus{ box-shadow:none !important; }

    /* ---- Remarks ---- */
    textarea.form-control{ resize: vertical; }

    /* ---- Submit ---- */
    .inv-submit-btn{
        background: linear-gradient(135deg, var(--amber), var(--amber-dark));
        border:none;
        color:var(--navy);
        font-weight:700;
        font-family: var(--font-display);
        padding:15px;
        border-radius: var(--radius-md);
        font-size:1rem;
        display:flex;
        align-items:center;
        justify-content:center;
        gap:10px;
        transition: transform .12s ease, box-shadow .12s ease;
        box-shadow: 0 10px 24px rgba(245,165,36,0.3);
    }

    .inv-submit-btn:hover{
        transform: translateY(-2px);
        box-shadow: 0 14px 30px rgba(245,165,36,0.4);
        color:var(--navy);
    }

    .inv-submit-btn:active{ transform: translateY(0); }

    @media (prefers-reduced-motion: reduce){
        .inv-submit-btn, .service-chip label, .qty-stepper button{ transition:none; }
        .inv-submit-btn:hover{ transform:none; }
    }
</style>

<div class="container-fluid inv-page py-4 py-md-5">

    <div class="row">

        <div class="col-xl-9 col-lg-10 mx-auto">

            <div class="inv-shell">

                <div class="inv-header">

                    <div class="inv-header-top">

                        <div class="inv-brand">
                            <div class="inv-logo">
                                {{-- Replace with your company logo at public/images/logo.png --}}
                                <img
                                    src="{{ public_url('images/favicon.png') }}"
                                    alt="{{ config('app.name', 'MoveEasy') }} logo"
                                    onerror="this.style.display='none'; this.parentElement.textContent='{{ substr(config('app.name','M'),0,1) }}';">
                            </div>
                            <div>
                                <p class="inv-brand-name text-white">{{ config('app.name', 'MoveEasy Relocations') }}</p>
                                <h1 class="inv-title text-white">Inventory Details</h1>
                            </div>
                        </div>

                        <div>
                            <span class="inv-badge">Final Step</span>
                            <div class="inv-booking-no">Booking No: <strong>{{ $booking->booking_no }}</strong></div>
                        </div>

                    </div>

                    <div class="inv-steps">
                        <div class="inv-step is-done">
                            <span class="inv-step-icon">&#10003;</span>
                            <span class="inv-step-label">Move Details</span>
                        </div>
                        <div class="inv-step is-done">
                            <span class="inv-step-icon">&#10003;</span>
                            <span class="inv-step-label">Contact Info</span>
                        </div>
                        <div class="inv-step is-current">
                            <span class="inv-step-icon">3</span>
                            <span class="inv-step-label">Inventory</span>
                        </div>
                    </div>

                </div>

                <div class="inv-body">

                    <form action="{{ route('booking.inventory.store', $booking->id) }}" method="POST">

                        @csrf

                        {{-- GLOBAL ERRORS --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Please fix the following errors:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="inv-section-head">
                            <span class="icon-badge">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="7" width="15" height="11" rx="1"></rect><path d="M16 10h4l3 3v5h-7z"></path><circle cx="6" cy="19" r="2"></circle><circle cx="18" cy="19" r="2"></circle></svg>
                            </span>
                            <div>
                                <h2>Move Details</h2>
                                <p class="sub">Home size, date and access at both ends</p>
                            </div>
                            <span class="line"></span>
                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3 col-12">
                                <label class="form-label">Configuration</label>
                                <div class="form-clt">
                                    <select name="configuration" class="form-select @error('configuration') is-invalid @enderror">

                                        <option value="">Select</option>

                                        @foreach(['1RK', '1BHK', '2BHK', '3BHK', '4BHK', 'Villa', 'Office'] as $config)

                                            <option
                                                value="{{ $config }}"
                                                {{ old('configuration') == $config ? 'selected' : '' }}>

                                                {{ $config }}

                                            </option>

                                        @endforeach

                                    </select>
                                </div>
                                @error('configuration')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg>
                                    Moving Date
                                </label>

                                <input
                                    type="date"
                                    name="moving_date"
                                    value="{{ old('moving_date') }}"
                                    min="{{ date('Y-m-d') }}"
                                    class="form-select @error('moving_date') is-invalid @enderror">

                                @error('moving_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                                    Moving Time
                                </label>

                                <select
                                    name="moving_time"
                                    class="form-select @error('moving_time') is-invalid @enderror">

                                    <option value="">Select</option>

                                    @foreach(['Morning', 'Afternoon', 'Evening'] as $time)

                                        <option
                                            value="{{ $time }}"
                                            {{ old('moving_time') == $time ? 'selected' : '' }}>

                                            {{ $time }}

                                        </option>

                                    @endforeach

                                </select>

                                @error('moving_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8l6-4 6 4v13M9 21v-6h6v6"></path></svg>
                                    Pickup Floor
                                </label>

                                <input
                                    type="number"
                                    min="0"
                                    name="pickup_floor"
                                    value="{{ old('pickup_floor', 0) }}"
                                    class="form-control @error('pickup_floor') is-invalid @enderror">

                                @error('pickup_floor')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"></rect><path d="M9 6h6M9 18h6"></path></svg>
                                    Pickup Lift
                                </label>

                                <select
                                    name="pickup_lift"
                                    class="form-select">

                                    <option value="1" {{ old('pickup_lift') == '1' ? 'selected' : '' }}>
                                        Yes
                                    </option>

                                    <option value="0" {{ old('pickup_lift', '0') == '0' ? 'selected' : '' }}>
                                        No
                                    </option>

                                </select>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8l6-4 6 4v13M9 21v-6h6v6"></path></svg>
                                    Destination Floor
                                </label>

                                <input type="number" min="0" name="destination_floor" value="{{ old('destination_floor', 0) }}"
                                    class="form-control @error('destination_floor') is-invalid @enderror">

                                @error('destination_floor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"></rect><path d="M9 6h6M9 18h6"></path></svg>
                                    Destination Lift
                                </label>

                                <select name="destination_lift" class="form-select">

                                    <option value="1" {{ old('destination_lift') == '1' ? 'selected' : '' }}>
                                        Yes
                                    </option>

                                    <option value="0" {{ old('destination_lift', '0') == '0' ? 'selected' : '' }}>
                                        No
                                    </option>

                                </select>

                            </div>

                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="7" width="15" height="11" rx="1"></rect><path d="M16 10h4l3 3v5h-7z"></path><circle cx="6" cy="19" r="2"></circle><circle cx="18" cy="19" r="2"></circle></svg>
                                    Vehicle Type
                                </label>

                                <select
                                    name="vehicle_type"
                                    class="form-select @error('vehicle_type') is-invalid @enderror">

                                    <option value="">Select</option>

                                    <option value="Shared"
                                        {{ old('vehicle_type') == 'Shared' ? 'selected' : '' }}>
                                        Shared
                                    </option>

                                    <option value="Dedicated"
                                        {{ old('vehicle_type') == 'Dedicated' ? 'selected' : '' }}>
                                        Dedicated
                                    </option>

                                </select>

                                @error('vehicle_type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                        <div class="inv-section-head">
                            <span class="icon-badge">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"></path></svg>
                            </span>
                            <div>
                                <h2>Additional Services</h2>
                                <p class="sub">Tap to add any service you need</p>
                            </div>
                            <span class="line"></span>
                        </div>

                        <div class="row">

                            @php
                                $services = [
                                    'packing_required' => ['Packing', '<path d="M3 8l9-5 9 5-9 5-9-5z"></path><path d="M3 8v8l9 5 9-5V8"></path><path d="M12 13v8"></path>'],
                                    'loading_required' => ['Loading', '<rect x="1" y="7" width="15" height="11" rx="1"></rect><path d="M16 10h4l3 3v5h-7z"></path><circle cx="6" cy="19" r="2"></circle><circle cx="18" cy="19" r="2"></circle>'],
                                    'unloading_required' => ['Unloading', '<path d="M12 3v12"></path><path d="M7 10l5 5 5-5"></path><path d="M4 21h16"></path>'],
                                    'unpacking_required' => ['Unpacking', '<path d="M3 8l9-5 9 5-9 5-9-5z"></path><path d="M3 8v8l9 5 9-5V8"></path><path d="M9 12h6"></path>'],
                                    'insurance_required' => ['Insurance', '<path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z"></path>'],
                                    'storage_required' => ['Storage', '<path d="M3 21V8l9-5 9 5v13"></path><path d="M9 21v-6h6v6"></path>'],
                                ];
                            @endphp

                            @foreach($services as $name => $meta)

                                <div class="col-md-4 col-6 mb-3 service-chip">

                                    <input
                                        type="checkbox"
                                        name="{{ $name }}"
                                        id="{{ $name }}"
                                        value="1"
                                        {{ old($name) ? 'checked' : '' }}>

                                    <label for="{{ $name }}">
                                        <span class="icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $meta[1] !!}</svg>
                                        </span>
                                        {{ $meta[0] }}
                                        <span class="check">&#10003;</span>
                                    </label>

                                </div>

                            @endforeach

                        </div>

                        <div class="inv-section-head">
                            <span class="icon-badge">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"></path><path d="M3.27 6.96L12 12.01l8.73-5.05"></path><path d="M12 22.08V12"></path></svg>
                            </span>
                            <div>
                                <h2>Select Inventory</h2>
                                <p class="sub">Check every item you're bringing along, and set quantities</p>
                            </div>
                            <span class="line"></span>
                        </div>

                        @error('inventory')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror

                        @foreach($categories as $category)

                            <div class="inv-category">

                                <div class="inv-category-header">
                                    <span class="dot"></span>
                                    {{ $category->name }}
                                </div>

                                <div class="p-3">

                                    <div class="row g-3">

                                        @foreach($category->items as $item)

                                            @php
                                                $checked = old("inventory.$item->id.selected");
                                                $qty = old("inventory.$item->id.quantity", 1);
                                            @endphp

                                            <div class="col-md-6 col-12">

                                                <div class="inv-item-row">

                                                    <div class="form-check mb-0">

                                                        <input
                                                            type="checkbox"
                                                            class="form-check-input inventory"
                                                            id="item{{ $item->id }}"
                                                            data-target="qty{{ $item->id }}"
                                                            name="inventory[{{ $item->id }}][selected]"
                                                            value="1"
                                                            {{ $checked ? 'checked' : '' }}>

                                                        <label
                                                            class="form-check-label"
                                                            for="item{{ $item->id }}">

                                                            {{ $item->item_name }}

                                                        </label>

                                                    </div>

                                                    <div class="qty-stepper">
                                                        <button type="button" class="qty-dec" data-target="qty{{ $item->id }}" {{ $checked ? '' : 'disabled' }}>&minus;</button>
                                                        <input
                                                            type="number"
                                                            min="1"
                                                            class="form-control qty-input"
                                                            id="qty{{ $item->id }}"
                                                            name="inventory[{{ $item->id }}][quantity]"
                                                            value="{{ $qty }}"
                                                            {{ $checked ? '' : 'disabled' }}>
                                                        <button type="button" class="qty-inc" data-target="qty{{ $item->id }}" {{ $checked ? '' : 'disabled' }}>&plus;</button>
                                                    </div>

                                                </div>

                                            </div>

                                        @endforeach

                                    </div>

                                </div>

                            </div>

                        @endforeach

                        <div class="mb-4">

                            <label class="form-label">Remarks</label>

                            <textarea
                                name="remarks"
                                placeholder="Special Remarks for booking"
                                rows="3"
                                class="form-control">{{ old('remarks') }}</textarea>

                        </div>

                        <button class="btn inv-submit-btn w-100">
                            Submit Booking
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"></path></svg>
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script>
document.querySelectorAll('.inventory').forEach(function(cb){

    cb.addEventListener('change', function(){

        let qty = document.getElementById(this.dataset.target);
        let row = this.closest('.inv-item-row');
        let dec = row.querySelector('.qty-dec');
        let inc = row.querySelector('.qty-inc');

        qty.disabled = !this.checked;
        dec.disabled = !this.checked;
        inc.disabled = !this.checked;

        if(!this.checked){
            qty.value = 1;
        }
    });

});

document.querySelectorAll('.qty-inc').forEach(function(btn){
    btn.addEventListener('click', function(){
        let input = document.getElementById(this.dataset.target);
        input.value = parseInt(input.value || 1, 10) + 1;
    });
});

document.querySelectorAll('.qty-dec').forEach(function(btn){
    btn.addEventListener('click', function(){
        let input = document.getElementById(this.dataset.target);
        let val = parseInt(input.value || 1, 10) - 1;
        input.value = val < 1 ? 1 : val;
    });
});
</script>

@endsection