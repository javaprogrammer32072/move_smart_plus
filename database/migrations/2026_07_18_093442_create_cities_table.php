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
        Schema::create('cities', function (Blueprint $table) {

            $table->id();

            $table->string('city_name',100);

            $table->string('state_name',100);

            $table->string('country_name',100)->default('India');

            $table->string('pincode',10)->nullable();

            $table->boolean('status')->default(true);

            $table->timestamps();

            $table->unique(['city_name','state_name']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};