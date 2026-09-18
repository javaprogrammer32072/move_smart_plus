@extends('admin.layout')

@section('title', 'Not Found')

@section('content')
    <div class="admin-empty-state">
        <i class="fas fa-compass"></i>
        <div class="admin-page-title">Page not found</div>
        <p>That admin page doesn't exist. <a href="{{ route('admin.dashboard') }}">Back to Dashboard</a></p>
    </div>
@endsection
