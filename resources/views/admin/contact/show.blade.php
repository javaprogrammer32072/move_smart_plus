@extends('admin.layout')

@section('title', 'Message from ' . $contact->name)

@section('content')

    <div class="d-flex justify-content-between align-items-start mb-3">
        <div>
            <div class="admin-page-title">{{ $contact->subject }}</div>
            <div class="admin-page-subtitle">From {{ $contact->name }} — {{ $contact->created_at->format('d M Y, h:i A') }}</div>
        </div>
        <a href="{{ route('admin.contact.index') }}" class="admin-btn admin-btn-outline"><i class="fas fa-arrow-left"></i> Back</a>
    </div>

    <div class="row g-3">
        <div class="col-lg-8">
            <div class="admin-card">
                <div class="admin-card-title">Message</div>
                <p style="white-space:pre-line;">{{ $contact->message }}</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="admin-card">
                <div class="admin-card-title">Contact Details</div>
                <div class="mb-2"><div class="admin-form-label">Name</div>{{ $contact->name }}</div>
                <div class="mb-2"><div class="admin-form-label">Email</div><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></div>
                <div class="mb-2"><div class="admin-form-label">Phone</div><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></div>
                <div class="mb-3"><div class="admin-form-label">Status</div><x-admin.status-badge :status="$contact->status" /></div>

                <form method="POST" action="{{ route('admin.contact.status', $contact) }}">
                    @csrf
                    @method('PATCH')
                    <label class="admin-form-label">Change Status</label>
                    <select name="status" class="admin-form-control mb-2">
                        @foreach (\App\Http\Controllers\Admin\ContactController::STATUSES as $status)
                            <option value="{{ $status }}" @selected($contact->status === $status)>{{ ucfirst($status) }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="admin-btn admin-btn-primary w-100 justify-content-center">Update Status</button>
                </form>
            </div>
        </div>
    </div>

@endsection
