@props(['status'])

@php
    $slug = \Illuminate\Support\Str::slug($status);
@endphp

<span class="admin-badge admin-badge-{{ $slug }}">{{ $status }}</span>
