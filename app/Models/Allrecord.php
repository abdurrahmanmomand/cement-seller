<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allrecord extends Model
{
    protected $table = 'allrecord';

    protected $fillable = [
        'vendor_name',
        'truck_number',
        'tuns_in_a_truck',
        'price_per_tun',
        'price_per_truck',
        'amount_paid_to_vendor',
        'amount_to_pay_to_vendor',
        'customer_name',
        'customer_location',
        'recieved_amount_from_customer',
        'remaining_amount_to_customer',
        'rent_per_truck',
        'rent_per_tun',
        'tax_per_truck',
        'tax_per_tun'
    ];
    
    protected static function booted()
    {
        static::saving(function ($allrecord) {
            // Prevent division by zero
            if ($allrecord->tuns_in_a_truck != 0) {
                $allrecord->price_per_tun = $allrecord->price_per_truck / $allrecord->tuns_in_a_truck;
                $allrecord->rent_per_tun = $allrecord->rent_per_truck / $allrecord->tuns_in_a_truck;
                $allrecord->tax_per_tun = $allrecord->tax_per_truck / $allrecord->tuns_in_a_truck;
            }

            // Set calculated fields
            $allrecord->amount_to_pay_to_vendor = $allrecord->price_per_truck - $allrecord->amount_paid_to_vendor;
            $allrecord->remaining_amount_to_customer = $allrecord->price_per_truck - $allrecord->recieved_amount_from_customer;
        });
    }
}
