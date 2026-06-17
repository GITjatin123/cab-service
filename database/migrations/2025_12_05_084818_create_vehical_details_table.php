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
        Schema::create('vehical_details', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_name')->unique();
            $table->string('vehicle_type');
            $table->string('sitting_capacity');
            $table->string('model');
            $table->foreignId('price_id')->constrained('vehical_prices')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('vehical_brands')->onDelete('cascade');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehical_details');
    }
};
