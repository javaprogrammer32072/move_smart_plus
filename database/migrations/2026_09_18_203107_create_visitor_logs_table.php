<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visitor_logs', function (Blueprint $table) {

            $table->id();

            $table->string('page_url', 255);

            // Hashed IP or anonymous cookie id — never a raw IP address.
            $table->string('visitor_hash', 64);

            $table->timestamp('visited_at')->useCurrent();

            $table->index(['visited_at']);
            $table->index(['visitor_hash', 'visited_at']);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visitor_logs');
    }
};
