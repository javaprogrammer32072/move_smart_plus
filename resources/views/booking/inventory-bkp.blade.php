@extends('layouts.app')

@section('title', 'Inventory Details')

@section('content')
    
    <div class="container py-5">

        <div class="row">

            <div class="col-lg-10 mx-auto">

                <div class="card shadow border-0">

                    <div class="card-header text-white" style="background-color: #f4c042;">

                        <div class="mb-1 h3 title wow fadeInUp" data-wow-delay="200ms">Final Step: Inventory Details</div>
                        <small><strong>Booking No : </strong> <strong>{{ $booking->booking_no }}</strong></small>

                    </div>

                    <div class="card-body">
                        <form action="{{ route('booking.inventory.store', $booking->id) }}" method="POST">

                            @csrf

                            {{-- GLOBAL ERRORS --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Please fix the following errors:</strong>
                                    <ul class="mb-0 mt-2">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row">

                                <div class="col-md-6 mb-3 col-12 wow fadeInUp animated" data-wow-delay=".4s">
                                    <label class="form-label"> Configuration</label>
                                    <div class="form-clt">
                                        <select name="configuration" class="form-select wow fadeInUp animated @error('configuration') is-invalid @enderror" data-wow-delay=".4s">

                                            <option value="">Select</option>

                                            @foreach(['1RK', '1BHK', '2BHK', '3BHK', '4BHK', 'Villa', 'Office'] as $config)

                                                <option
                                                    value="{{ $config }}"
                                                    {{ old('configuration') == $config ? 'selected' : '' }}>

                                                    {{ $config }}

                                                </option>

                                            @endforeach

                                        </select>
                                        </div>
                                    @error('configuration')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>

                                <div class="col-md-6 mb-3 wow fadeInUp animated" data-wow-delay=".4s">

                                    <label class="form-label">
                                        Moving Date
                                    </label>

                                    <input
                                        type="date"
                                        name="moving_date"
                                        value="{{ old('moving_date') }}"
                                        min="{{ date('Y-m-d') }}"
                                        class="form-select @error('moving_date') is-invalid @enderror wow fadeInUp animated" data-wow-delay=".4s">

                                    @error('moving_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4 mb-3 wow fadeInUp animated" data-wow-delay=".4s">

                                    <label class="form-label">
                                        Moving Time
                                    </label>

                                    <select
                                        name="moving_time"
                                        class="form-select @error('moving_time') is-invalid @enderror wow fadeInUp animated" data-wow-delay=".4s">

                                        <option value="">Select</option>

                                        @foreach(['Morning', 'Afternoon', 'Evening'] as $time)

                                            <option
                                                value="{{ $time }}"
                                                {{ old('moving_time') == $time ? 'selected' : '' }}>

                                                {{ $time }}

                                            </option>

                                        @endforeach

                                    </select>

                                    @error('moving_time')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>

                                <div class="col-md-4 mb-3 wow fadeInUp animated" data-wow-delay=".4s">

                                    <label class="form-label">
                                        Pickup Floor
                                    </label>

                                    <input
                                        type="number"
                                        min="0"
                                        name="pickup_floor"
                                        value="{{ old('pickup_floor', 0) }}"
                                        class="form-control-md @error('pickup_floor') is-invalid @enderror wow fadeInUp animated" data-wow-delay=".4s">

                                    @error('pickup_floor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>

                                <div class="col-md-4 mb-3 wow fadeInUp animated" data-wow-delay=".4s">

                                    <label class="form-label">
                                        Pickup Lift
                                    </label>

                                    <select
                                        name="pickup_lift"
                                        class="form-select wow fadeInUp animated" data-wow-delay=".4s">

                                        <option value="1" {{ old('pickup_lift') == '1' ? 'selected' : '' }}>
                                            Yes
                                        </option>

                                        <option value="0" {{ old('pickup_lift', '0') == '0' ? 'selected' : '' }}>
                                            No
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4 mb-3 wow fadeInUp animated" data-wow-delay=".4s">

                                    <label class="form-label">
                                        Destination Floor
                                    </label>

                                    <input type="number" min="0" name="destination_floor" value="{{ old('destination_floor', 0) }}"
                                        class="form-control @error('destination_floor') is-invalid @enderror wow fadeInUp animated" data-wow-delay=".4s">

                                    @error('destination_floor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                                <div class="col-md-4 mb-3 wow fadeInUp animated" data-wow-delay=".4s">

                                    <label class="form-label">
                                        Destination Lift
                                    </label>

                                    <select name="destination_lift" class="form-select wow fadeInUp animated" data-wow-delay=".4s">

                                        <option value="1" {{ old('destination_lift') == '1' ? 'selected' : '' }}>
                                            Yes
                                        </option>

                                        <option value="0" {{ old('destination_lift', '0') == '0' ? 'selected' : '' }}>
                                            No
                                        </option>

                                    </select>

                                </div>

                                <div class="col-md-4 mb-3 wow fadeInUp animated" data-wow-delay=".4s">

                                    <label class="form-label">
                                        Vehicle Type
                                    </label>

                                    <select
                                        name="vehicle_type"
                                        class="form-select @error('vehicle_type') is-invalid @enderror wow fadeInUp animated" data-wow-delay=".4s">

                                        <option value="">Select</option>

                                        <option value="Shared"
                                            {{ old('vehicle_type') == 'Shared' ? 'selected' : '' }}>
                                            Shared
                                        </option>

                                        <option value="Dedicated"
                                            {{ old('vehicle_type') == 'Dedicated' ? 'selected' : '' }}>
                                            Dedicated
                                        </option>

                                    </select>

                                    @error('vehicle_type')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>

                            </div>

                            <hr>

                            <h4>Additional Services</h4>

                            <div class="row">

                                @php
                                    $services = [
                                        'packing_required' => 'Packing',
                                        'loading_required' => 'Loading',
                                        'unloading_required' => 'Unloading',
                                        'unpacking_required' => 'Unpacking',
                                        'insurance_required' => 'Insurance',
                                        'storage_required' => 'Storage'
                                    ];
                                @endphp

                                @foreach($services as $name => $label)

                                    <div class="col-md-4 mb-2 wow fadeInUp animated" data-wow-delay=".4s">

                                        <div class="form-check">

                                            <input
                                                class="form-check-input wow fadeInUp animated" data-wow-delay=".4s"
                                                type="checkbox"
                                                name="{{ $name }}"
                                                id="{{ $name }}"
                                                value="1"
                                                {{ old($name) ? 'checked' : '' }}>

                                            <label class="form-check-label" for="{{ $name }}">

                                                {{ $label }}

                                            </label>

                                        </div>

                                    </div>

                                @endforeach

                            </div>

                            <hr>

                            <h3 class="mb-4">

                                Select Inventory

                            </h3>

                            @error('inventory')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            @foreach($categories as $category)

                                <div class="card mb-4">

                                    <div class="card-header bg-light">

                                        <strong>

                                            {{ $category->name }}

                                        </strong>

                                    </div>

                                    <div class="card-body">

                                        <div class="row">

                                            @foreach($category->items as $item)

                                                @php

                                                $checked = old("inventory.$item->id.selected");

                                                $qty = old("inventory.$item->id.quantity", 1);

                                                @endphp

                                                <div class="col-md-6 mb-3 wow fadeInUp animated" data-wow-delay=".4s">

                                                    <div class="d-flex justify-content-between align-items-center">

                                                        <div>

                                                            <div class="form-check">

                                                                <input

                                                                    type="checkbox"

                                                                    class="form-check-input inventory wow fadeInUp animated" data-wow-delay=".4s"

                                                                    id="item{{ $item->id }}"

                                                                    data-target="qty{{ $item->id }}"

                                                                    name="inventory[{{ $item->id }}][selected]"

                                                                    value="1"

                                                                    {{ $checked ? 'checked' : '' }}>

                                                                <label
                                                                    class="form-check-label"
                                                                    for="item{{ $item->id }}">

                                                                    {{ $item->item_name }}

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div>

                                                            <input

                                                                type="number"

                                                                min="1"

                                                                class="form-control"

                                                                id="qty{{ $item->id }}"

                                                                name="inventory[{{ $item->id }}][quantity]"

                                                                value="{{ $qty }}"

                                                                style="width:90px"

                                                                {{ $checked ? '' : 'disabled' }}>

                                                        </div>

                                                    </div>

                                                </div>

                                            @endforeach

                                        </div>

                                    </div>

                                </div>

                            @endforeach

                            <div class="mb-3 wow fadeInUp animated" data-wow-delay=".4s">

                                <label class="form-label"> Remarks</label>

                                <textarea
                                    name="remarks"
                                    placeholder="Special Remarks for booking"
                                    rows="3"
                                    class="form-control wow fadeInUp animated" data-wow-delay=".4s">{{ old('remarks') }}</textarea>

                            </div>

                            <button
                                class="btn btn-primary btn-lg w-100">

                                Submit Booking

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script>

    document.querySelectorAll('.inventory').forEach(function(cb){

        cb.addEventListener('change',function(){

            let qty=document.getElementById(this.dataset.target);

            qty.disabled=!this.checked;

            if(!this.checked){

                qty.value=1;

            }

        });

    });

    </script>

@endsection