@extends('admin.layout')

@section('title', 'Newsletter Subscribers')

@section('content')

    <div class="d-flex justify-content-between align-items-start mb-3">
        <div>
            <div class="admin-page-title">Newsletter Subscribers</div>
            <div class="admin-page-subtitle">{{ $total }} total subscribers.</div>
        </div>
        <a href="{{ route('admin.newsletter.export') }}" class="admin-btn admin-btn-primary">
            <i class="fas fa-file-csv"></i> Export CSV
        </a>
    </div>

    <div class="admin-card">
        <form method="GET" action="{{ route('admin.newsletter.index') }}" class="row g-2">
            <div class="col-md-4">
                <input type="text" name="search" value="{{ $filters['search'] ?? '' }}" class="admin-form-control" placeholder="Search by email">
            </div>
            <div class="col-md-2">
                <button type="submit" class="admin-btn admin-btn-outline w-100 justify-content-center">Search</button>
            </div>
        </form>
    </div>

    <div class="admin-card">
        @if ($subscribers->isEmpty())
            <div class="admin-empty-state">
                <i class="fas fa-envelope-open"></i>
                No subscribers yet.
            </div>
        @else
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Subscribed</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subscribers as $subscriber)
                        <tr>
                            <td>{{ $subscriber->email }}</td>
                            <td><x-admin.status-badge :status="ucfirst($subscriber->status)" /></td>
                            <td>{{ optional($subscriber->subscribed_at)->format('d M Y') ?? $subscriber->created_at->format('d M Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">{{ $subscribers->links() }}</div>
        @endif
    </div>

@endsection
