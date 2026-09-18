<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminActivityLog extends Model
{
    public $timestamps = false;

    protected $table = 'admin_activity_log';

    protected $fillable = [
        'action',
        'target',
        'performed_at',
    ];

    protected $casts = [
        'performed_at' => 'datetime',
    ];

    /**
     * Record an admin action. Central place so every admin controller
     * logs activity the same way.
     */
    public static function record(string $action, ?string $target = null): void
    {
        static::create([
            'action' => $action,
            'target' => $target,
            'performed_at' => now(),
        ]);
    }
}
