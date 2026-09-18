@extends('admin.layout')

@section('title', 'Activity Log')

@section('content')

    <div class="admin-page-title">Activity Log</div>
    <div class="admin-page-subtitle">A record of admin actions — useful for accountability on a single shared login.</div>

    <div class="admin-card">
        @if ($activity->isEmpty())
            <div class="admin-empty-state">
                <i class="fas fa-clock-rotate-left"></i>
                No activity recorded yet.
            </div>
        @else
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>When</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activity as $entry)
                        <tr>
                            <td>{{ $entry->action }}</td>
                            <td>{{ $entry->performed_at->format('d M Y, h:i A') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">{{ $activity->links() }}</div>
        @endif
    </div>

@endsection
