<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminSetting extends Model
{
    protected $fillable = [
        'password_hash',
    ];

    /**
     * The single settings row, created on first access.
     */
    public static function current(): self
    {
        return static::first() ?? static::create([]);
    }
}
