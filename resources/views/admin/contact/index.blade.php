@extends('admin.layout')

@section('title', 'Contact Submissions')

@section('content')

    <div class="admin-page-title">Contact Us Submissions</div>
    <div class="admin-page-subtitle">{{ $contacts->total() }} total messages.</div>

    <div class="admin-card">
        <form method="GET" action="{{ route('admin.contact.index') }}" class="row g-2 align-items-end">
            <div class="col-md-4">
                <label class="admin-form-label">Search</label>
                <input type="text" name="search" value="{{ $filters['search'] ?? '' }}" class="admin-form-control" placeholder="Name or email">
            </div>
            <div class="col-md-3">
                <label class="admin-form-label">Status</label>
                <select name="status" class="admin-form-control">
                    <option value="">All Statuses</option>
                    @foreach ($statuses as $status)
                        <option value="{{ $status }}" @selected(($filters['status'] ?? '') === $status)>{{ ucfirst($status) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="admin-btn admin-btn-outline w-100 justify-content-center">Filter</button>
            </div>
        </form>
    </div>

    <div class="admin-card">
        @if ($contacts->isEmpty())
            <div class="admin-empty-state">
                <i class="fas fa-inbox"></i>
                No contact submissions found.
            </div>
        @else
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Received</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td><a href="{{ route('admin.contact.show', $contact) }}">{{ $contact->name }}</a></td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($contact->subject, 40) }}</td>
                            <td>{{ $contact->created_at->format('d M Y') }}</td>
                            <td><x-admin.status-badge :status="$contact->status" /></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">{{ $contacts->links() }}</div>
        @endif
    </div>

@endsection
