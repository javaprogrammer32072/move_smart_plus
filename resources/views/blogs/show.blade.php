@extends('layouts.app')

@section('content')

    <x-page-title title="Move Smart Plus Blog" :crumb="$blog['title']" parent="Blog" :parent-url="route('blogs.index')" />

    <section class="blog-details pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="{{ public_url($blog['image']) }}" alt="{{ $blog['image_alt'] }}" width="424"
                                height="362">
                            <div class="blog-details__date">
                                <span class="day">{{ \Carbon\Carbon::parse($blog['published_at'])->format('d') }}</span>
                                <span class="month">{{ \Carbon\Carbon::parse($blog['published_at'])->format('M') }}</span>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            <ul class="blog-details__meta list-unstyled">
                                <li><a href="{{ route('about') }}"><i class="fa-regular fa-user"></i> MoveSmartPlus
                                        Team</a></li>
                                <li><a href="{{ route('blogs.index') }}"><i class="fa-regular fa-folder"></i>
                                        {{ $blog['category'] }}</a></li>
                                <li><span><i class="fa-regular fa-calendar"></i>
                                        {{ \Carbon\Carbon::parse($blog['published_at'])->format('d M, Y') }}</span>
                                </li>
                            </ul>
                            <h1 class="blog-details__title">{{ $blog['title'] }}</h1>

                            @include("blogs.content.{$blog['slug']}")

                        </div>

                        <div class="blog-details__bottom">
                            <p>Category: {{ $blog['category'] }}</p>
                        </div>
                    </div>

                    @if (count($otherBlogs))
                        <div class="h3 mt-4 mb-4">You May Also Like</div>
                        <div class="nav-links">
                            @foreach ($otherBlogs as $other)
                                <div class="{{ $loop->first ? 'prev' : 'next' }}">
                                    <div class="thumb">
                                        <a href="{{ route('blogs.show', $other['slug']) }}">
                                            <img src="{{ public_url($other['image']) }}"
                                                alt="{{ $other['image_alt'] }}" width="60" height="60"
                                                loading="lazy">
                                        </a>
                                    </div>
                                    <a href="{{ route('blogs.show', $other['slug']) }}">{{ $other['title'] }}</a>
                                </div>
                            @endforeach
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'headline' => $blog['title'],
        'description' => $blog['excerpt'],
        'image' => public_url($blog['image']),
        'datePublished' => $blog['published_at'],
        'dateModified' => $blog['published_at'],
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => route('blogs.show', $blog['slug']),
        ],
        'author' => [
            '@type' => 'Organization',
            'name' => 'MoveSmartPlus',
            'url' => url('/'),
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'MoveSmartPlus',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => public_url('images/logo.png'),
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

@endsection
