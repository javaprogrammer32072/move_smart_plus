@props(['title', 'crumb' => null, 'parent' => null, 'parentUrl' => null, 'asH1' => true])

<section class="page-title"
    style="background-image: url(images/resource/page-title.png);opacity: 0.85;background-color: var(--theme-color-lighter);">
    <div class="auto-container">
        <div class="title-outer text-center">
            @if ($asH1)
                <h1 class="title">{{ $title }}</h1>
            @else
                <div class="h1 title">{{ $title }}</div>
            @endif
            <ul class="page-breadcrumb">
                <li><a href="{{ url('') }}">Home</a></li>
                @if ($parent)
                    <li><a href="{{ $parentUrl ?? '#' }}">{{ $parent }}</a></li>
                @endif
                <li>{{ $crumb ?? $title }}</li>
            </ul>
        </div>
    </div>
</section>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => array_values(array_filter([
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('')],
        $parent ? ['@type' => 'ListItem', 'position' => 2, 'name' => $parent, 'item' => $parentUrl ?? url()->current()] : null,
        ['@type' => 'ListItem', 'position' => $parent ? 3 : 2, 'name' => $crumb ?? $title, 'item' => url()->current()],
    ])),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
