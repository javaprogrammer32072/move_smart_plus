@extends('layouts.app')

@section('content')

    <x-page-title title="Move Smart Plus Blog" crumb="Blog" />

    <section class="blog-section pt-120 pb-120">
        <div class="auto-container">
            <div class="sec-title-box">
                <div class="sec-title">
                    <div class="h6 sub-title">Our Blog</div>
                    <div class="h2 title">Helpful moving guides <br>and <span>packing tips</span></div>
                </div>
            </div>
            <p class="mb-5" style="max-width:640px;">Practical, no-nonsense advice for anyone planning a move in
                Bihar or Jharkhand — how to pack fragile items, what to do before moving day, and which packing
                materials are actually worth using.</p>
            <div class="row gx-4 gy-4">
                @foreach ($blogs as $blog)
                    <x-blog-card :blog="$blog" />
                @endforeach
            </div>
        </div>
    </section>

@endsection
