<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin_activity_log', function (Blueprint $table) {

            $table->id();

            $table->string('action', 255);

            $table->string('target', 255)->nullable();

            $table->timestamp('performed_at')->useCurrent();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_activity_log');
    }
};
