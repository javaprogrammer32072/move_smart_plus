<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingInventory extends Model
{
    use HasFactory;

    protected $table='booking_inventory';

    protected $fillable=[

        'booking_id',

        'inventory_item_id',
        // 'inventory_category_id',
        'quantity'

    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function item()
    {
        return $this->belongsTo(InventoryItem::class,'inventory_item_id');
    }
    public function category()
    {
        // return $this->belongsTo(InventoryCategory::class,'inventory_category_id');
    }
}
