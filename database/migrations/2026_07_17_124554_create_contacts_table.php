<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {

            $table->id();

            $table->string('name',100);

            $table->string('email',150);

            $table->string('phone',20);

            $table->string('subject',200);

            $table->text('message');

            $table->string('ip_address',50)->nullable();

            $table->text('user_agent')->nullable();

            $table->boolean('is_read')->default(false);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};