<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Single-row table holding an optional override for the admin password
     * hash. The env vars (ADMIN_EMAIL / ADMIN_PASSWORD_HASH) remain the
     * baseline credential source; this lets the Settings page change the
     * password without editing code or redeploying.
     */
    public function up(): void
    {
        Schema::create('admin_settings', function (Blueprint $table) {

            $table->id();

            $table->string('password_hash')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_settings');
    }
};
