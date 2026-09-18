@props(['blog'])

<div class="blog-block col-xl-4 col-md-6">
    <div class="inner-block">
        <div class="image-box">
            <div class="image">
                <a href="{{ route('blogs.show', $blog['slug']) }}">
                    <img src="{{ public_url($blog['image']) }}" alt="{{ $blog['image_alt'] }}" loading="lazy">
                    <img src="{{ public_url($blog['image']) }}" alt="{{ $blog['image_alt'] }}" loading="lazy">
                </a>
            </div>
        </div>
        <div class="content-box">
            <div class="post-meta">
                <div class="category">{{ $blog['category'] }}</div>
                <div class="date">{{ \Illuminate\Support\Carbon::parse($blog['published_at'])->format('d M, Y') }}</div>
            </div>
            <div class="h3 title"><a href="{{ route('blogs.show', $blog['slug']) }}">{{ $blog['title'] }}</a></div>
            <p>{{ $blog['excerpt'] }}</p>
            <a class="btn-read-more" href="{{ route('blogs.show', $blog['slug']) }}"><i
                    class="fa-regular fa-arrow-right"></i> Read More </a>
        </div>
    </div>
</div>
