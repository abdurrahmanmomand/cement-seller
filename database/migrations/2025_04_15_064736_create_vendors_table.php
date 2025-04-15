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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name');
            $table->string('truck_number');
            $table->decimal('tuns_in_a_truck',10,3);
            $table->decimal('price_per_tun',10,3);
            $table->decimal('price_per_truck',10,3);
            $table->decimal('paid_amount',10,3);
            $table->decimal('amount_to_pay',10,3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
