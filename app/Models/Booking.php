<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [

        'booking_no',

        'customer_name',

        'phone',

        'email',

        'relocation_type',

        'pickup_city_id',

        'pickup_address',

        'destination_city_id',

        'destination_address',

        'configuration',

        'moving_date',

        'moving_time',

        'pickup_floor',

        'pickup_lift',

        'destination_floor',

        'destination_lift',

        'packing_required',

        'loading_required',

        'unloading_required',

        'unpacking_required',

        'insurance_required',

        'storage_required',

        'vehicle_type',

        'remarks',

        'status'

    ];

    protected $casts = [

        'moving_date' => 'date',

        'pickup_lift' => 'boolean',

        'destination_lift' => 'boolean',

        'packing_required' => 'boolean',

        'loading_required' => 'boolean',

        'unloading_required' => 'boolean',

        'unpacking_required' => 'boolean',

        'insurance_required' => 'boolean',

        'storage_required' => 'boolean',

    ];

    public function inventories()
    {
        return $this->hasMany(BookingInventory::class);
    }
    public function bookingInventories()
    {
        return $this->hasMany(BookingInventory::class);
    }
    public function pickupCity()
    {
        return $this->belongsTo(City::class, 'pickup_city_id');
    }

    public function destinationCity()
    {
        return $this->belongsTo(City::class, 'destination_city_id');
    }
}
