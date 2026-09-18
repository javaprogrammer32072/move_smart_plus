@props([
    'items',
    'heading' => 'Frequently Asked Questions',
    'intro' => null,
])

<div class="mt-25">
    <div class="h3">{{ $heading }}</div>
    @if ($intro)
        <p>{{ $intro }}</p>
    @endif
    <ul class="accordion-box">
        @foreach ($items as $index => $item)
            <li class="accordion block {{ $index === 0 ? 'active-block' : '' }}">
                <div class="acc-btn {{ $index === 0 ? 'active' : '' }}">{{ $item['q'] }}
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="acc-content" @if ($index === 0) style="display: block;" @endif>
                    <div class="content">
                        <div class="text">{{ $item['a'] }}</div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => collect($items)->map(fn ($item) => [
        '@type' => 'Question',
        'name' => $item['q'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $item['a'],
        ],
    ])->all(),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
