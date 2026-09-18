<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'page_url',
        'visitor_hash',
        'visited_at',
    ];

    protected $casts = [
        'visited_at' => 'datetime',
    ];
}
