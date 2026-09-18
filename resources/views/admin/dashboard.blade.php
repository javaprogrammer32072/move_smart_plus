@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')

    <div class="admin-page-title">Dashboard</div>
    <div class="admin-page-subtitle">A quick health check — for editing, use the sections in the sidebar.</div>

    <div class="row g-3 mb-2">
        <div class="col-md-3 col-6">
            <div class="admin-stat-card">
                <div class="admin-stat-icon"><i class="fas fa-box"></i></div>
                <div class="admin-stat-value">{{ $summary['bookings_today'] }}</div>
                <div class="admin-stat-label">Bookings Today</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="admin-stat-card">
                <div class="admin-stat-icon"><i class="fas fa-calendar-week"></i></div>
                <div class="admin-stat-value">{{ $summary['bookings_week'] }}</div>
                <div class="admin-stat-label">Bookings This Week</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="admin-stat-card">
                <div class="admin-stat-icon"><i class="fas fa-hourglass-half"></i></div>
                <div class="admin-stat-value">{{ $summary['bookings_pending'] }}</div>
                <div class="admin-stat-label">Pending Bookings</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="admin-stat-card">
                <div class="admin-stat-icon"><i class="fas fa-comments"></i></div>
                <div class="admin-stat-value">{{ $summary['contacts_new'] }}</div>
                <div class="admin-stat-label">New Contact Messages</div>
            </div>
        </div>
    </div>

    <div class="row g-3 mt-1">
        <div class="col-lg-6">
            <div class="admin-card">
                <div class="admin-card-title">Recent Bookings</div>

                @if ($recentBookings->isEmpty())
                    <div class="admin-empty-state"><i class="fas fa-box-open"></i>No bookings yet.</div>
                @else
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Booking No.</th>
                                <th>Customer</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentBookings as $booking)
                                <tr>
                                    <td><a href="{{ route('admin.bookings.show', $booking) }}">{{ $booking->booking_no }}</a></td>
                                    <td>{{ $booking->customer_name }}</td>
                                    <td><x-admin.status-badge :status="$booking->status" /></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

        <div class="col-lg-6">
            <div class="admin-card">
                <div class="admin-card-title">Recent Contact Submissions</div>

                @if ($recentContacts->isEmpty())
                    <div class="admin-empty-state"><i class="fas fa-inbox"></i>No messages yet.</div>
                @else
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentContacts as $contact)
                                <tr>
                                    <td><a href="{{ route('admin.contact.show', $contact) }}">{{ $contact->name }}</a></td>
                                    <td>{{ \Illuminate\Support\Str::limit($contact->subject, 30) }}</td>
                                    <td><x-admin.status-badge :status="$contact->status" /></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

    <div class="admin-card">
        <div class="admin-card-title">Quick Links</div>
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('admin.bookings.index') }}" class="admin-btn admin-btn-outline"><i class="fas fa-box"></i> Bookings</a>
            <a href="{{ route('admin.cities.index') }}" class="admin-btn admin-btn-outline"><i class="fas fa-city"></i> Cities</a>
            <a href="{{ route('admin.newsletter.index') }}" class="admin-btn admin-btn-outline"><i class="fas fa-envelope"></i> Newsletter</a>
            <a href="{{ route('admin.contact.index') }}" class="admin-btn admin-btn-outline"><i class="fas fa-comments"></i> Contact Us</a>
            <a href="{{ route('admin.analytics.index') }}" class="admin-btn admin-btn-outline"><i class="fas fa-chart-line"></i> Analytics</a>
        </div>
    </div>

@endsection
