@extends('layouts.app')

@section('content')

    <x-page-title title="Help Center" crumb="Help Center" />

    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <div class="h3">How Can We Help?</div>
                    <p>Search our frequently asked questions below, browse by category, or contact our support team
                        directly if you can't find what you're looking for.</p>

                    <form method="GET" action="{{ route('help-center') }}" class="mt-4" role="search">
                        <div class="form-clt">
                            <label for="help-search" class="visually-hidden">Search for help</label>
                            <input type="search" id="help-search" name="search" value="{{ $search }}"
                                placeholder="Search for help...">
                            <button class="theme-btn btn-style-five" type="submit">Search</button>
                        </div>
                    </form>

                    @if ($search !== '')
                        <p class="mt-4">
                            @if ($noResults)
                                No results found for "<strong>{{ $search }}</strong>". Try a different search term,
                                or browse all the questions below.
                            @else
                                Showing results for "<strong>{{ $search }}</strong>".
                            @endif
                            <a href="{{ route('help-center') }}">Clear search</a>
                        </p>
                    @endif

                    @if ($noResults)
                        <div class="h3 mt-40">Browse All Questions</div>
                    @endif

                    @foreach ($faqs as $category => $categoryFaqs)
                        <div class="h3 mt-40">{{ $category }}</div>
                        <ul class="accordion-box">
                            @foreach ($categoryFaqs as $faq)
                                @php($isFirstOverall = $loop->parent->first && $loop->first)
                                <li class="accordion block {{ $isFirstOverall ? 'active-block' : '' }}">
                                    <div class="acc-btn {{ $isFirstOverall ? 'active' : '' }}">
                                        {{ $faq->question }}
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <div class="acc-content" @if ($isFirstOverall) style="display: block;" @endif>
                                        <div class="content">
                                            <div class="text">{{ $faq->answer }}</div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach

                    <div class="h3 mt-40">Can't Find What You're Looking For?</div>
                    <p>Our support team is here to help. Reach out and we'll get back to you.</p>
                    <ul class="list-unstyled">
                        <li>Call: <a href="tel:+917070784447">+91 7070784447</a> / <a
                                href="tel:+917070999547">7070999547</a></li>
                        <li>Email: <a href="mailto:info@movesmartplus.com">info@movesmartplus.com</a></li>
                    </ul>

                    <div class="mt-40 text-center">
                        <a href="{{ route('contact-us') }}" class="theme-btn btn-style-four mb-2"><span
                                class="btn-title">Contact Support</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @if ($faqs->flatten()->isNotEmpty())
        <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $faqs->flatten()->map(fn ($faq) => [
                '@type' => 'Question',
                'name' => $faq->question,
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq->answer,
                ],
            ])->values()->all(),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    @endif

@endsection
