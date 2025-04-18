<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allrecord;

class ShowallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allrecords =Allrecord::all();
        return view('all-records',compact('allrecords'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-new-record');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
      "vendor_name" => 'required',
      "truck_number" => 'required',
      "tuns_in_a_truck" => 'required',
      "price_per_truck" => 'required',
      "profit_per_ton" => 'required',
      "amount_paid_to_vendor" => 'required',
      "customer_name" => 'required',
      "rent_per_truck" => 'required',
      "tax_per_truck" => 'required',
      "customer_location" => 'required',
      "recieved_amount_from_customer" => 'required',
        ]);
        $allrecord = Allrecord::create([
            "vendor_name" => $request->vendor_name,
            "truck_number" => $request->truck_number,
            "tuns_in_a_truck" => $request->tuns_in_a_truck,
            "price_per_truck" => $request-> price_per_truck,
            "profit_per_ton" => $request->profit_per_ton,
            "amount_paid_to_vendor" => $request-> amount_paid_to_vendor,
            "customer_name" => $request->customer_name,
            "rent_per_truck" => $request->rent_per_truck,
            "tax_per_truck" => $request->tax_per_truck,
            "customer_location" => $request->customer_location,
            "recieved_amount_from_customer" => $request->recieved_amount_from_customer,
        ]);
        return redirect()->route('show-all.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $record =Allrecord::find($id);
        return view('edit-new-record',compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "vendor_name" => 'required',
            "truck_number" => 'required',
            "tuns_in_a_truck" => 'required',
            "price_per_truck" => 'required',
            "profit_per_ton" => 'required',
            "amount_paid_to_vendor" => 'required',
            "customer_name" => 'required',
            "rent_per_truck" => 'required',
            "tax_per_truck" => 'required',
            "customer_location" => 'required',
            "recieved_amount_from_customer" => 'required',
              ]);
        $record = Allrecord::find($id)->update([
             "vendor_name" => $request->vendor_name,
            "truck_number" => $request->truck_number,
            "tuns_in_a_truck" => $request->tuns_in_a_truck,
            "price_per_truck" => $request-> price_per_truck,
            "profit_per_ton" => $request->profit_per_ton,
            "amount_paid_to_vendor" => $request-> amount_paid_to_vendor,
            "customer_name" => $request->customer_name,
            "rent_per_truck" => $request->rent_per_truck,
            "tax_per_truck" => $request->tax_per_truck,
            "customer_location" => $request->customer_location,
            "recieved_amount_from_customer" => $request->recieved_amount_from_customer,
        ]);
        return redirect()->route('show-all.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = Allrecord::find($id)->delete();
        return redirect()->route('show-all.index');

    }
}
