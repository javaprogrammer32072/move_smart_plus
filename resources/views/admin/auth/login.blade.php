<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Admin Login | Move Smart Plus</title>

    <link href="{{ public_url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ public_url('css/style.css') }}" rel="stylesheet">
    <link href="{{ public_url('css/admin.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ public_url('images/favicon.png') }}" type="image/x-icon">
</head>
<body class="admin-body" style="display:flex;align-items:center;justify-content:center;min-height:100vh;">

    <div style="width:100%;max-width:380px;padding:0 20px;">
        <div class="text-center mb-4">
            <img src="{{ public_url('images/smart-move-plus.png') }}" alt="Move Smart Plus" style="max-width:200px;">
        </div>

        <div class="admin-card">
            <div class="admin-card-title">Admin Login</div>

            @if (session('error'))
                <div class="admin-alert admin-alert-error">{{ session('error') }}</div>
            @endif
            @if ($errors->any())
                <div class="admin-alert admin-alert-error">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login.attempt') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="admin-form-label">Email</label>
                    <input type="email" id="email" name="email" class="admin-form-control"
                        value="{{ old('email') }}" required autofocus>
                </div>

                <div class="mb-4">
                    <label for="password" class="admin-form-label">Password</label>
                    <input type="password" id="password" name="password" class="admin-form-control" required>
                </div>

                <button type="submit" class="admin-btn admin-btn-primary w-100 justify-content-center">
                    Log In
                </button>
            </form>
        </div>
    </div>

</body>
</html>
