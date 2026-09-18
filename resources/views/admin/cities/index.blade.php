@extends('admin.layout')

@section('title', 'Cities')

@section('content')

    <div class="d-flex justify-content-between align-items-start mb-3">
        <div>
            <div class="admin-page-title">Cities</div>
            <div class="admin-page-subtitle">{{ $cities->total() }} total cities. These power the booking form's pickup/drop city selectors.</div>
        </div>
        <button type="button" class="admin-btn admin-btn-primary" data-bs-toggle="modal" data-bs-target="#addCityModal">
            <i class="fas fa-plus"></i> Add City
        </button>
    </div>

    <div class="admin-card">
        <form method="GET" action="{{ route('admin.cities.index') }}" class="row g-2 mb-1">
            <div class="col-md-4">
                <input type="text" name="search" value="{{ $filters['search'] ?? '' }}" class="admin-form-control"
                    placeholder="Search city or state">
            </div>
            <div class="col-md-2">
                <button type="submit" class="admin-btn admin-btn-outline w-100 justify-content-center">Search</button>
            </div>
        </form>
    </div>

    <div class="admin-card">
        @if ($cities->isEmpty())
            <div class="admin-empty-state">
                <i class="fas fa-city"></i>
                No cities found.
            </div>
        @else
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>City</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                        <tr>
                            <td>{{ $city->city_name }}</td>
                            <td>{{ $city->state_name }}</td>
                            <td>{{ $city->pincode ?: '—' }}</td>
                            <td><x-admin.status-badge :status="$city->status ? 'Active' : 'Inactive'" /></td>
                            <td>
                                <div class="d-flex gap-2">
                                    <button type="button" class="admin-btn admin-btn-outline" style="padding:5px 12px;font-size:13px;"
                                        data-bs-toggle="modal" data-bs-target="#editCityModal{{ $city->id }}">Edit</button>

                                    <form method="POST" action="{{ route('admin.cities.destroy', $city) }}"
                                        onsubmit="return confirm('Delete {{ $city->city_name }}? If it is used by existing bookings it will be deactivated instead of deleted.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="admin-btn admin-btn-danger" style="padding:5px 12px;font-size:13px;">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <!-- Edit City Modal -->
                        <div class="modal fade" id="editCityModal{{ $city->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="{{ route('admin.cities.update', $city) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit {{ $city->city_name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="admin-form-label">City Name</label>
                                                <input type="text" name="city_name" value="{{ $city->city_name }}" class="admin-form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="admin-form-label">State</label>
                                                <input type="text" name="state_name" value="{{ $city->state_name }}" class="admin-form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="admin-form-label">Pincode</label>
                                                <input type="text" name="pincode" value="{{ $city->pincode }}" class="admin-form-control">
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="status" value="1" class="form-check-input" id="statusCheck{{ $city->id }}" @checked($city->status)>
                                                <label class="form-check-label" for="statusCheck{{ $city->id }}">Active (shown in booking form)</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="admin-btn admin-btn-outline" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="admin-btn admin-btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">{{ $cities->links() }}</div>
        @endif
    </div>

    <!-- Add City Modal -->
    <div class="modal fade" id="addCityModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.cities.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add City</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="admin-form-label">City Name</label>
                            <input type="text" name="city_name" class="admin-form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="admin-form-label">State</label>
                            <input type="text" name="state_name" class="admin-form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="admin-form-label">Pincode (optional)</label>
                            <input type="text" name="pincode" class="admin-form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="admin-btn admin-btn-outline" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="admin-btn admin-btn-primary">Add City</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ public_url('js/bootstrap.min.js') }}"></script>
@endsection
