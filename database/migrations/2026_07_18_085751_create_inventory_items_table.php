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
        Schema::create('inventory_items', function (Blueprint $table) {

            $table->id();

            $table->foreignId('category_id')
                ->constrained('inventory_categories')
                ->cascadeOnDelete();

            $table->string('item_name');

            $table->string('unit')->default('Piece');

            $table->integer('display_order')->default(1);

            $table->boolean('status')->default(true);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_items');
    }
};
