@extends('admin.layout')

@section('title', 'Bookings')

@section('content')

    <div class="admin-page-title">Bookings</div>
    <div class="admin-page-subtitle">{{ $bookings->total() }} total bookings.</div>

    <div class="admin-card">
        <form method="GET" action="{{ route('admin.bookings.index') }}" class="row g-2 align-items-end">
            <div class="col-md-3">
                <label class="admin-form-label">Search</label>
                <input type="text" name="search" value="{{ $filters['search'] ?? '' }}" class="admin-form-control"
                    placeholder="Name, phone or booking no.">
            </div>
            <div class="col-md-2">
                <label class="admin-form-label">Type</label>
                <select name="type" class="admin-form-control">
                    <option value="">All Types</option>
                    @foreach (['Home','Office','Vehicle','Bike','Car','Commercial','Warehouse'] as $type)
                        <option value="{{ $type }}" @selected(($filters['type'] ?? '') === $type)>{{ $type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <label class="admin-form-label">Status</label>
                <select name="status" class="admin-form-control">
                    <option value="">All Statuses</option>
                    @foreach ($statuses as $status)
                        <option value="{{ $status }}" @selected(($filters['status'] ?? '') === $status)>{{ $status }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <label class="admin-form-label">From</label>
                <input type="date" name="date_from" value="{{ $filters['date_from'] ?? '' }}" class="admin-form-control">
            </div>
            <div class="col-md-2">
                <label class="admin-form-label">To</label>
                <input type="date" name="date_to" value="{{ $filters['date_to'] ?? '' }}" class="admin-form-control">
            </div>
            <div class="col-md-1">
                <button type="submit" class="admin-btn admin-btn-primary w-100 justify-content-center">Filter</button>
            </div>
        </form>
    </div>

    <div class="admin-card">
        @if ($bookings->isEmpty())
            <div class="admin-empty-state">
                <i class="fas fa-box-open"></i>
                No bookings match these filters.
            </div>
        @else
            <div style="overflow-x:auto;">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Booking No.</th>
                            <th>Customer</th>
                            <th>Type</th>
                            <th>City</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td><a href="{{ route('admin.bookings.show', $booking) }}">{{ $booking->booking_no }}</a></td>
                                <td>{{ $booking->customer_name }}<br><small style="color:var(--admin-text-muted);">{{ $booking->phone }}</small></td>
                                <td>{{ $booking->relocation_type }}</td>
                                <td>{{ $booking->pickupCity->city_name ?? '—' }}</td>
                                <td>{{ $booking->created_at->format('d M Y') }}</td>
                                <td><x-admin.status-badge :status="$booking->status" /></td>
                                <td>
                                    <form method="POST" action="{{ route('admin.bookings.status', $booking) }}" class="d-flex gap-1">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" class="admin-form-control" style="padding:5px 8px;font-size:13px;">
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status }}" @selected($booking->status === $status)>{{ $status }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="admin-btn admin-btn-outline" style="padding:5px 12px;font-size:13px;">Save</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3">{{ $bookings->links() }}</div>
        @endif
    </div>

@endsection
