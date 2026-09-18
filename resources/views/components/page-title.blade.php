@props(['title', 'crumb' => null])

<section class="page-title"
    style="background-image: url(images/resource/page-title.png);opacity: 0.85;background-color: var(--theme-color-lighter);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <div class="h1 title">{{ $title }}</div>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('') }}">Home</a></li>
                <li>{{ $crumb ?? $title }}</li>
            </ul>
        </div>
    </div>
</section>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => $crumb ?? $title, 'item' => url()->current()],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
