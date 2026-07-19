<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;

    protected $fillable = [

        'category_id',

        'item_name',

        'unit',

        'display_order',

        'status'

    ];

    public function category()
    {
        return $this->belongsTo(InventoryCategory::class);
    }
}
