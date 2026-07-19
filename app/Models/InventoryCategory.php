<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryCategory extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',

        'display_order',

        'status'

    ];

    public function items()
    {
        return $this->hasMany(InventoryItem::class, 'category_id')
            ->where('status', 1)
            ->orderBy('display_order');
    }

}
