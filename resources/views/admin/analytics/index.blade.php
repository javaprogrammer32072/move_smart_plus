@extends('admin.layout')

@section('title', 'Analytics')

@section('content')

    <div class="admin-page-title">Analytics</div>
    <div class="admin-page-subtitle">Numbers drawn from bookings, contact submissions and newsletter signups.</div>

    <div class="admin-card">
        <form method="GET" action="{{ route('admin.analytics.index') }}" class="row g-2 align-items-end">
            <div class="col-md-3">
                <label class="admin-form-label">From</label>
                <input type="date" name="from" value="{{ $from }}" class="admin-form-control">
            </div>
            <div class="col-md-3">
                <label class="admin-form-label">To</label>
                <input type="date" name="to" value="{{ $to }}" class="admin-form-control">
            </div>
            <div class="col-md-2">
                <button type="submit" class="admin-btn admin-btn-primary w-100 justify-content-center">Apply</button>
            </div>
        </form>
    </div>

    <div class="row g-3">
        <div class="col-lg-8">
            <div class="admin-card">
                <div class="admin-card-title">Bookings Over Time</div>
                <canvas id="bookingsOverTimeChart" height="90"></canvas>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="admin-card">
                <div class="admin-card-title">Bookings by Status</div>
                <canvas id="bookingsByStatusChart" height="220"></canvas>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-lg-6">
            <div class="admin-card">
                <div class="admin-card-title">Top Pickup Cities</div>
                <canvas id="bookingsByCityChart" height="180"></canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="admin-card">
                <div class="admin-card-title">Contact Messages Over Time</div>
                <canvas id="contactsOverTimeChart" height="180"></canvas>
            </div>
        </div>
    </div>

    <div class="admin-card">
        <div class="admin-card-title">Newsletter Growth</div>
        <canvas id="newsletterChart" height="90"></canvas>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
    <script>
        const themeColor = '#0C403E';
        const accentColor = '#F4C042';

        new Chart(document.getElementById('bookingsOverTimeChart'), {
            type: 'line',
            data: {
                labels: @json($bookingsOverTime->pluck('day')),
                datasets: [{
                    label: 'Bookings',
                    data: @json($bookingsOverTime->pluck('total')),
                    borderColor: themeColor,
                    backgroundColor: 'rgba(12,64,62,0.08)',
                    tension: 0.3,
                    fill: true,
                }]
            },
            options: { plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, ticks: { precision: 0 } } } }
        });

        new Chart(document.getElementById('bookingsByStatusChart'), {
            type: 'doughnut',
            data: {
                labels: @json($bookingsByStatus->keys()),
                datasets: [{
                    data: @json($bookingsByStatus->values()),
                    backgroundColor: ['#F4C042', '#0C403E', '#60a5fa', '#34d399', '#fbbf24', '#a78bfa', '#f87171'],
                }]
            },
            options: { plugins: { legend: { position: 'bottom' } } }
        });

        new Chart(document.getElementById('bookingsByCityChart'), {
            type: 'bar',
            data: {
                labels: @json($bookingsByCity->keys()),
                datasets: [{
                    label: 'Bookings',
                    data: @json($bookingsByCity->values()),
                    backgroundColor: accentColor,
                }]
            },
            options: { indexAxis: 'y', plugins: { legend: { display: false } }, scales: { x: { beginAtZero: true, ticks: { precision: 0 } } } }
        });

        new Chart(document.getElementById('contactsOverTimeChart'), {
            type: 'bar',
            data: {
                labels: @json($contactsOverTime->pluck('day')),
                datasets: [{
                    label: 'Messages',
                    data: @json($contactsOverTime->pluck('total')),
                    backgroundColor: themeColor,
                }]
            },
            options: { plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, ticks: { precision: 0 } } } }
        });

        new Chart(document.getElementById('newsletterChart'), {
            type: 'line',
            data: {
                labels: @json($newsletterOverTime->pluck('day')),
                datasets: [{
                    label: 'New Subscribers',
                    data: @json($newsletterOverTime->pluck('total')),
                    borderColor: accentColor,
                    backgroundColor: 'rgba(244,192,66,0.15)',
                    tension: 0.3,
                    fill: true,
                }]
            },
            options: { plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, ticks: { precision: 0 } } } }
        });
    </script>
@endsection
