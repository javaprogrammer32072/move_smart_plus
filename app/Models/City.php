<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [

        'city_name',

        'state_name',

        'country_name',

        'pincode',

        'status'

    ];

    public function pickupBookings()
    {
        return $this->hasMany(Booking::class,'pickup_city_id');
    }

    public function destinationBookings()
    {
        return $this->hasMany(Booking::class,'destination_city_id');
    }
     public function getFullNameAttribute()
    {
        return "{$this->city_name}, {$this->state_name}";
    }
}