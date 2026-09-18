@props(['id' => 'main'])

<form method="POST" action="{{ route('newsletter.subscribe') }}" class="newsletter-form">
    @csrf

    @if (session('newsletter_success'))
        <div class="alert alert-success py-2 px-3 mb-3">{{ session('newsletter_success') }}</div>
    @endif

    @if (session('newsletter_error'))
        <div class="alert alert-danger py-2 px-3 mb-3">{{ session('newsletter_error') }}</div>
    @endif

    <div class="form-clt">
        <label for="newsletter-email-{{ $id }}" class="visually-hidden">Email address</label>
        <input type="email" id="newsletter-email-{{ $id }}" name="email" value="{{ old('email') }}"
            placeholder="Enter email address" required
            class="@error('email') is-invalid @enderror">
        <button class="theme-btn btn-style-five" type="submit">Subscribe</button>
    </div>

    @error('email')
        <small class="text-danger d-block mt-2">{{ $message }}</small>
    @enderror
</form>
