@extends('layouts.app')

@section('title', 'Booking Successful')

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
        --teal:#0FBFA0;
        --teal-dark:#0A9C82;
        --bg-soft:#F3F5FA;
        --text-main:#1B2030;
        --text-muted:#727A8C;
        --border:#E7E9F0;
        --font-display:'Poppins', sans-serif;
        --font-body:'Inter', sans-serif;
    }

    .success-page{
        background:
            radial-gradient(circle at 10% 10%, rgba(15,191,160,0.08) 0, transparent 40%),
            radial-gradient(circle at 90% 90%, rgba(245,165,36,0.08) 0, transparent 40%),
            var(--bg-soft);
        font-family: var(--font-body);
        min-height: 80vh;
    }

    .success-card{
        border-radius:22px;
        box-shadow: 0 24px 60px -16px rgba(15,28,63,0.2);
        border:1px solid var(--border);
        overflow:hidden;
        background:#fff;
    }

    .success-brand{
        display:flex;
        align-items:center;
        justify-content:center;
        gap:10px;
        padding:18px 0 0;
    }

    .success-logo{
        width:34px; height:34px;
        border-radius:9px;
        background: var(--navy);
        color:#fff;
        font-family: var(--font-display);
        font-weight:800;
        font-size:0.9rem;
        display:flex; align-items:center; justify-content:center;
        overflow:hidden;
    }

    .success-logo img{ width:100%; height:100%; object-fit:contain; }

    .success-brand-name{
        font-size:0.8rem;
        font-weight:700;
        letter-spacing:.04em;
        text-transform:uppercase;
        color: var(--text-muted);
    }

    /* ---- Success icon with drawn check ---- */
    .success-icon-wrap{
        width:100px; height:100px;
        margin: 8px auto 0;
        position:relative;
    }

    .success-icon-ring{
        position:absolute;
        inset:-10px;
        border-radius:50%;
        border:2px solid var(--teal);
        opacity:0;
        animation: ring-pulse 1.4s ease-out .3s 1;
    }

    @keyframes ring-pulse{
        0%{ transform:scale(0.7); opacity:.6; }
        100%{ transform:scale(1.25); opacity:0; }
    }

    .success-icon{
        width:100px; height:100px;
        border-radius:50%;
        background: linear-gradient(135deg, var(--teal), var(--teal-dark));
        display:flex; align-items:center; justify-content:center;
        box-shadow: 0 12px 28px rgba(15,191,160,0.35);
        position:relative;
    }

    .success-icon svg{
        width:46px; height:46px;
    }

    .success-icon .check-path{
        stroke-dasharray: 48;
        stroke-dashoffset: 48;
        animation: draw-check .5s ease-out .5s forwards;
    }

    @keyframes draw-check{
        to{ stroke-dashoffset: 0; }
    }

    @media (prefers-reduced-motion: reduce){
        .success-icon-ring{ animation:none; opacity:0; }
        .check-path{ animation:none; stroke-dashoffset:0; }
    }

    .success-heading{
        font-family: var(--font-display);
        font-weight:700;
        font-size:1.7rem;
        color: var(--navy);
    }

    .success-sub{
        color: var(--text-muted);
        font-size:1.02rem;
    }

    .success-sub strong{ color: var(--text-main); }

    /* ---- Booking number ---- */
    .booking-box{
        background: linear-gradient(135deg, var(--navy), var(--navy-light));
        border-radius:16px;
        padding:20px 24px;
        color:#fff;
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:16px;
        flex-wrap:wrap;
    }

    .booking-box .label{
        font-size:0.76rem;
        text-transform:uppercase;
        letter-spacing:.06em;
        opacity:.7;
        margin-bottom:4px;
    }

    .booking-box .value{
        font-family: var(--font-display);
        font-weight:700;
        font-size:1.5rem;
        letter-spacing:.02em;
    }

    .copy-btn{
        background: rgba(255,255,255,0.12);
        border:1px solid rgba(255,255,255,0.25);
        color:#fff;
        border-radius:10px;
        padding:8px 14px;
        font-size:0.82rem;
        font-weight:600;
        display:flex;
        align-items:center;
        gap:6px;
        transition: background .15s ease;
        cursor:pointer;
    }

    .copy-btn:hover{ background: rgba(255,255,255,0.22); color:#fff; }

    /* ---- Timeline ---- */
    .next-steps{
        text-align:left;
        background: var(--bg-soft);
        border-radius:16px;
        padding:26px 26px 6px;
        border:1px solid var(--border);
    }

    .next-steps h5{
        font-family: var(--font-display);
        font-weight:700;
        font-size:1rem;
        color: var(--navy);
        display:flex;
        align-items:center;
        gap:10px;
        margin-bottom:20px;
    }

    .next-steps h5 .icon-badge{
        width:32px; height:32px;
        border-radius:9px;
        background: rgba(245,165,36,0.14);
        color: var(--amber-dark);
        display:flex; align-items:center; justify-content:center;
        flex-shrink:0;
    }

    .timeline{
        position:relative;
        padding-left:6px;
    }

    .timeline-item{
        position:relative;
        display:flex;
        gap:14px;
        padding-bottom:22px;
    }

    .timeline-item:last-child{ padding-bottom:0; }

    .timeline-item::before{
        content:"";
        position:absolute;
        left:13px;
        top:28px;
        bottom:0;
        width:2px;
        background: var(--border);
    }

    .timeline-item:last-child::before{ display:none; }

    .timeline-dot{
        width:28px; height:28px;
        border-radius:50%;
        background:#fff;
        border:2px solid var(--teal);
        color: var(--teal-dark);
        display:flex; align-items:center; justify-content:center;
        flex-shrink:0;
        font-size:0.75rem;
        font-weight:700;
        z-index:1;
    }

    .timeline-text{
        font-size:0.92rem;
        color: var(--text-main);
        padding-top:3px;
    }

    .timeline-text strong{ color: var(--navy); }

    /* ---- Buttons ---- */
    .btn-success-home{
        background: linear-gradient(135deg, var(--amber), var(--amber-dark));
        border:none;
        color: var(--navy);
        font-weight:700;
        font-family: var(--font-display);
        padding:12px 26px;
        border-radius:12px;
        box-shadow: 0 10px 22px rgba(245,165,36,0.3);
        transition: transform .12s ease, box-shadow .12s ease;
    }

    .btn-success-home:hover{
        transform: translateY(-2px);
        box-shadow: 0 14px 28px rgba(245,165,36,0.4);
        color: var(--navy);
    }

    .btn-success-outline{
        background:#fff;
        border:1.5px solid var(--teal);
        color: var(--teal-dark);
        font-weight:700;
        font-family: var(--font-display);
        padding:12px 26px;
        border-radius:12px;
        transition: all .12s ease;
    }

    .btn-success-outline:hover{
        background: var(--teal);
        color:#fff;
        transform: translateY(-2px);
    }

    @media (prefers-reduced-motion: reduce){
        .btn-success-home:hover, .btn-success-outline:hover{ transform:none; }
    }

    @media (max-width:576px){
        .success-card .card-body{ padding:2.2rem 1.4rem !important; }
        .booking-box{ flex-direction:column; align-items:flex-start; }
    }
</style>

<div class="success-page py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">

                <div class="success-brand">
                    <div class="success-logo">
                        <img
                            src="{{ public_url('images/favicon.png') }}"
                            alt="{{ config('app.name', 'MoveEasy') }} logo"
                            onerror="this.style.display='none'; this.parentElement.textContent='{{ substr(config('app.name','M'),0,1) }}';">
                    </div>
                    <span class="success-brand-name">{{ config('app.name', 'Move Smart Plus') }}</span>
                </div>

                <div class="card success-card border-0 mt-3">
                    <div class="card-body text-center p-5">

                        <!-- Success Icon -->
                        <div class="mb-4">
                            <div class="success-icon-wrap">
                                <div class="success-icon-ring"></div>
                                <div class="success-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                        <path class="check-path" d="M4 12.5l5 5L20 6.5"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <h2 class="success-heading mb-3">
                            Booking Confirmed!
                        </h2>

                        <p class="success-sub">
                            Thank you for choosing <strong>{{ config('app.name', 'Move Smart Plus') }}</strong>.
                            Your relocation request has been submitted successfully.
                        </p>

                        <!-- Booking Number -->
                        <div class="booking-box my-4">
                            <div>
                                <span class="label">Your Booking Number</span>
                                <div class="value" id="bookingNo">{{ $booking->booking_no }}</div>
                            </div>

                            <button type="button" class="copy-btn" onclick="copyBookingNo()">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2"></rect><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"></path></svg>
                                <span id="copyLabel">Copy</span>
                            </button>
                        </div>

                        <!-- Information -->
                        <div class="next-steps mb-4">
                            <h5>
                                <span class="icon-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4M12 8h.01"></path></svg>
                                </span>
                                What happens next?
                            </h5>

                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-dot">1</div>
                                    <div class="timeline-text">
                                        Our <strong>relocation expert</strong> will review your request.
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-dot">2</div>
                                    <div class="timeline-text">
                                        You'll receive a <strong>confirmation call</strong> shortly.
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-dot">3</div>
                                    <div class="timeline-text">
                                        A <strong>customized quotation</strong> will be shared with you.
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-dot">4</div>
                                    <div class="timeline-text">
                                        Once approved, your <strong>move will be scheduled</strong>.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="{{ url('/') }}" class="btn btn-success-home px-4">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M3 12l9-9 9 9"></path><path d="M5 10v10h14V10"></path></svg>
                                Back to Home
                            </a>

                            <a href="#" class="btn btn-success-outline px-4">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path><path d="M14 2v6h6"></path></svg>
                                View Booking
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
function copyBookingNo(){
    const text = document.getElementById('bookingNo').textContent.trim();
    const label = document.getElementById('copyLabel');

    navigator.clipboard.writeText(text).then(function(){
        label.textContent = 'Copied!';
        setTimeout(function(){ label.textContent = 'Copy'; }, 1800);
    });
}
</script>

@endsection