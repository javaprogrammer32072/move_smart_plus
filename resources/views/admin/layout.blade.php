<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Admin') | Move Smart Plus</title>

    <link href="{{ public_url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ public_url('css/style.css') }}" rel="stylesheet">
    <link href="{{ public_url('css/admin.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ public_url('images/favicon.png') }}" type="image/x-icon">
</head>
<body class="admin-body">

    @php
        $adminNav = [
            ['route' => 'admin.dashboard', 'label' => 'Dashboard', 'icon' => 'fas fa-gauge-high'],
            ['route' => 'admin.bookings.index', 'label' => 'Bookings', 'icon' => 'fas fa-box'],
            ['route' => 'admin.cities.index', 'label' => 'Cities', 'icon' => 'fas fa-city'],
            ['route' => 'admin.newsletter.index', 'label' => 'Newsletter', 'icon' => 'fas fa-envelope'],
            ['route' => 'admin.contact.index', 'label' => 'Contact Us', 'icon' => 'fas fa-comments'],
            ['route' => 'admin.analytics.index', 'label' => 'Analytics', 'icon' => 'fas fa-chart-line'],
            ['route' => 'admin.traffic.index', 'label' => 'Traffic', 'icon' => 'fas fa-signal'],
            ['route' => 'admin.activity.index', 'label' => 'Activity Log', 'icon' => 'fas fa-clock-rotate-left'],
            ['route' => 'admin.settings.index', 'label' => 'Settings', 'icon' => 'fas fa-gear'],
        ];
    @endphp

    <div class="admin-shell">
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="admin-brand">Move Smart Plus <span style="opacity:.6;font-weight:400;">Admin</span></div>
            <ul class="admin-nav">
                @foreach ($adminNav as $item)
                    <li>
                        <a href="{{ route($item['route']) }}"
                            class="{{ request()->routeIs($item['route'] === 'admin.dashboard' ? 'admin.dashboard' : str($item['route'])->before('.index') . '.*') ? 'active' : '' }}">
                            <i class="{{ $item['icon'] }}"></i> {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>

        <div class="admin-main">
            <div class="admin-topbar">
                <button type="button" class="admin-menu-toggle" id="adminMenuToggle" aria-label="Toggle menu">
                    <i class="fas fa-bars"></i>
                </button>
                <div></div>
                <div class="d-flex align-items-center gap-3">
                    <span style="font-size:14px;color:var(--admin-text-muted);">{{ config('admin.email') }}</span>
                    <form method="POST" action="{{ route('admin.logout') }}" class="m-0">
                        @csrf
                        <button type="submit" class="admin-btn admin-btn-outline">
                            <i class="fas fa-right-from-bracket"></i> Logout
                        </button>
                    </form>
                </div>
            </div>

            <div class="admin-content">
                @if (session('success'))
                    <div class="admin-alert admin-alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="admin-alert admin-alert-error">{{ session('error') }}</div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <script>
        document.getElementById('adminMenuToggle')?.addEventListener('click', function () {
            document.getElementById('adminSidebar')?.classList.toggle('admin-sidebar-open');
        });
    </script>

    @yield('scripts')
</body>
</html>
