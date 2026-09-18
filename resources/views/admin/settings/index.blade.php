@extends('admin.layout')

@section('title', 'Settings')

@section('content')

    <div class="admin-page-title">Settings</div>
    <div class="admin-page-subtitle">Change the admin password.</div>

    <div class="admin-card" style="max-width:480px;">
        <div class="admin-card-title">Change Password</div>

        @if ($errors->any())
            <div class="admin-alert admin-alert-error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('admin.settings.password') }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="admin-form-label">Current Password</label>
                <input type="password" name="current_password" class="admin-form-control" required>
            </div>
            <div class="mb-3">
                <label class="admin-form-label">New Password</label>
                <input type="password" name="new_password" class="admin-form-control" required minlength="8">
            </div>
            <div class="mb-4">
                <label class="admin-form-label">Confirm New Password</label>
                <input type="password" name="new_password_confirmation" class="admin-form-control" required minlength="8">
            </div>

            <button type="submit" class="admin-btn admin-btn-primary">Update Password</button>
        </form>
    </div>

@endsection
