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
        Schema::create('allrecords', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name');
            $table->string('truck_number');
            $table->decimal('tuns_in_a_truck',10,3);
            $table->decimal('price_per_truck',10,3);
            $table->decimal('profit_per_ton',10,3);
            $table->decimal('price_per_tun',10,3); //add automatic
            $table->decimal('amount_paid_to_vendor',10,3);
            $table->decimal('amount_to_pay_to_vendor',10,3); //add automatic
            $table->string('customer_name');
            $table->string('customer_location');
            $table->decimal('recieved_amount_from_customer',10,3);
            $table->decimal('remaining_amount_to_customer',10,3);  //add automatic
            $table->decimal('rent_per_truck',10,3);
            $table->decimal('rent_per_tun',10,3);   //add automatic
            $table->decimal('tax_per_truck',10,3);
            $table->decimal('tax_per_tun',10,3);   //add automatic
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allrecords');
    }
};
