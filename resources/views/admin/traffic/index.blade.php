@extends('admin.layout')

@section('title', 'Traffic')

@section('content')

    <div class="admin-page-title">Traffic</div>
    <div class="admin-page-subtitle">A simple, self-hosted visit counter — answers "is traffic growing," not a
        replacement for full analytics.</div>

    <div class="row g-3 mb-2">
        <div class="col-md-3 col-6">
            <div class="admin-stat-card">
                <div class="admin-stat-icon"><i class="fas fa-eye"></i></div>
                <div class="admin-stat-value">{{ $visitsToday }}</div>
                <div class="admin-stat-label">Visits Today</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="admin-stat-card">
                <div class="admin-stat-icon"><i class="fas fa-calendar-week"></i></div>
                <div class="admin-stat-value">{{ $visitsWeek }}</div>
                <div class="admin-stat-label">Visits This Week</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="admin-stat-card">
                <div class="admin-stat-icon"><i class="fas fa-user"></i></div>
                <div class="admin-stat-value">{{ $uniqueToday }}</div>
                <div class="admin-stat-label">Unique Visitors Today</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="admin-stat-card">
                <div class="admin-stat-icon"><i class="fas fa-users"></i></div>
                <div class="admin-stat-value">{{ $uniqueWeek }}</div>
                <div class="admin-stat-label">Unique Visitors This Week</div>
            </div>
        </div>
    </div>

    <div class="admin-card">
        <div class="admin-card-title">Visits — Last 30 Days</div>
        @if ($visitsOverTime->isEmpty())
            <div class="admin-empty-state"><i class="fas fa-signal"></i>No visits logged yet.</div>
        @else
            <canvas id="visitsChart" height="90"></canvas>
        @endif
    </div>

    <div class="admin-card">
        <div class="admin-card-title">Top Pages — Last 30 Days</div>
        @if ($topPages->isEmpty())
            <div class="admin-empty-state"><i class="fas fa-file"></i>No page views logged yet.</div>
        @else
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Page</th>
                        <th>Views</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topPages as $page)
                        <tr>
                            <td>/{{ $page->page_url }}</td>
                            <td>{{ $page->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection

@section('scripts')
    @if ($visitsOverTime->isNotEmpty())
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
        <script>
            new Chart(document.getElementById('visitsChart'), {
                type: 'line',
                data: {
                    labels: @json($visitsOverTime->pluck('day')),
                    datasets: [
                        {
                            label: 'Visits',
                            data: @json($visitsOverTime->pluck('total')),
                            borderColor: '#0C403E',
                            backgroundColor: 'rgba(12,64,62,0.08)',
                            tension: 0.3,
                            fill: true,
                        },
                        {
                            label: 'Unique Visitors',
                            data: @json($visitsOverTime->pluck('unique_total')),
                            borderColor: '#F4C042',
                            backgroundColor: 'rgba(244,192,66,0.1)',
                            tension: 0.3,
                            fill: true,
                        }
                    ]
                },
                options: { scales: { y: { beginAtZero: true, ticks: { precision: 0 } } } }
            });
        </script>
    @endif
@endsection
