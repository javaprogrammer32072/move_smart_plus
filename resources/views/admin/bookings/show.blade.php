@extends('admin.layout')

@section('title', 'Booking ' . $booking->booking_no)

@section('content')

    <div class="d-flex justify-content-between align-items-start mb-3">
        <div>
            <div class="admin-page-title">Booking {{ $booking->booking_no }}</div>
            <div class="admin-page-subtitle">Placed {{ $booking->created_at->format('d M Y, h:i A') }}</div>
        </div>
        <a href="{{ route('admin.bookings.index') }}" class="admin-btn admin-btn-outline"><i class="fas fa-arrow-left"></i> Back to Bookings</a>
    </div>

    <div class="row g-3">
        <div class="col-lg-8">
            <div class="admin-card">
                <div class="admin-card-title">Customer & Move Details</div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="admin-form-label">Customer Name</div>
                        <div>{{ $booking->customer_name }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="admin-form-label">Phone</div>
                        <div>{{ $booking->phone }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="admin-form-label">Email</div>
                        <div>{{ $booking->email ?: '—' }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="admin-form-label">Relocation Type</div>
                        <div>{{ $booking->relocation_type }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="admin-form-label">Pickup City</div>
                        <div>{{ $booking->pickupCity->city_name ?? '—' }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="admin-form-label">Pickup Address</div>
                        <div>{{ $booking->pickup_address }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="admin-form-label">Destination City</div>
                        <div>{{ $booking->destinationCity->city_name ?? '—' }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="admin-form-label">Destination Address</div>
                        <div>{{ $booking->destination_address }}</div>
                    </div>
                    @if ($booking->moving_date)
                        <div class="col-md-6">
                            <div class="admin-form-label">Moving Date</div>
                            <div>{{ $booking->moving_date->format('d M Y') }} ({{ $booking->moving_time ?? '—' }})</div>
                        </div>
                    @endif
                    @if ($booking->configuration)
                        <div class="col-md-6">
                            <div class="admin-form-label">Configuration</div>
                            <div>{{ $booking->configuration }}</div>
                        </div>
                    @endif
                    @if ($booking->remarks)
                        <div class="col-12">
                            <div class="admin-form-label">Remarks</div>
                            <div>{{ $booking->remarks }}</div>
                        </div>
                    @endif
                </div>
            </div>

            @if ($booking->inventoryItems->isNotEmpty())
                <div class="admin-card">
                    <div class="admin-card-title">Items Booked</div>
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Category</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking->inventoryItems as $item)
                                <tr>
                                    <td>{{ $item->item_name }}</td>
                                    <td>{{ $item->category->name ?? '—' }}</td>
                                    <td>{{ $item->pivot->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            <div class="admin-card">
                <div class="admin-card-title">Status History</div>

                @if ($history->isEmpty())
                    <div class="admin-empty-state"><i class="fas fa-clock-rotate-left"></i>No status changes recorded yet.</div>
                @else
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>From</th>
                                <th>To</th>
                                <th>When</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($history as $entry)
                                <tr>
                                    <td>{{ $entry->old_status ?? '—' }}</td>
                                    <td><x-admin.status-badge :status="$entry->new_status" /></td>
                                    <td>{{ $entry->changed_at->format('d M Y, h:i A') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

        <div class="col-lg-4">
            <div class="admin-card">
                <div class="admin-card-title">Current Status</div>
                <div class="mb-3"><x-admin.status-badge :status="$booking->status" /></div>

                <form method="POST" action="{{ route('admin.bookings.status', $booking) }}">
                    @csrf
                    @method('PATCH')
                    <label class="admin-form-label">Change Status</label>
                    <select name="status" class="admin-form-control mb-2">
                        @foreach ($statuses as $status)
                            <option value="{{ $status }}" @selected($booking->status === $status)>{{ $status }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="admin-btn admin-btn-primary w-100 justify-content-center">Update Status</button>
                </form>
            </div>
        </div>
    </div>

@endsection
