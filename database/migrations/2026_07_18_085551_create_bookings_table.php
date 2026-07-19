<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->id();

            $table->string('booking_no')->unique();

            $table->string('customer_name');

            $table->string('phone', 15);

            $table->string('email')->nullable();

            $table->enum('relocation_type', [
                'Home',
                'Office',
                'Vehicle',
                'Bike',
                'Car',
                'Commercial',
                'Warehouse'
            ]);

            // Pickup Details
           $table->unsignedBigInteger('pickup_city_id');

            $table->text('pickup_address');

            // Destination Details
            $table->unsignedBigInteger('destination_city_id');

            $table->text('destination_address');

            $table->enum('configuration', [
                '1RK',
                '1BHK',
                '2BHK',
                '3BHK',
                '4BHK',
                'Villa',
                'Office'
            ])->nullable();

            $table->date('moving_date')->nullable();

            $table->enum('moving_time', [
                'Morning',
                'Afternoon',
                'Evening'
            ])->nullable();

            $table->integer('pickup_floor')->default(0);

            $table->boolean('pickup_lift')->default(false);

            $table->integer('destination_floor')->default(0);

            $table->boolean('destination_lift')->default(false);

            $table->boolean('packing_required')->default(true);

            $table->boolean('loading_required')->default(true);

            $table->boolean('unloading_required')->default(true);

            $table->boolean('unpacking_required')->default(false);

            $table->boolean('insurance_required')->default(false);

            $table->boolean('storage_required')->default(false);

            $table->enum('vehicle_type', [
                'Shared',
                'Dedicated'
            ])->nullable();

            $table->text('remarks')->nullable();

            $table->enum('status', [
                'Pending',
                'Quote Generated',
                'Assigned',
                'Confirmed',
                'In Transit',
                'Delivered',
                'Cancelled'
            ])->default('Pending');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
