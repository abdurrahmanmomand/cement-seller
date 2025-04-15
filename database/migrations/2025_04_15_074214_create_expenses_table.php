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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('truck_number');
            $table->decimal('tons',10,3);
            $table->decimal('rent_per_truck',10,3);
            $table->decimal('rent_per_tun',10,3);
            $table->decimal('tax_per_truck',10,3);
            $table->decimal('tax_per_tun',10,3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
