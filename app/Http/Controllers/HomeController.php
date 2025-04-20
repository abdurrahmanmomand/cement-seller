<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Allrecord;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $allrecord = Allrecord::all();

        $days = $allrecord->filter(function ($record) {
            return $record->created_at->isToday();
        });
        $months = $allrecord->filter(function ($record) {
            return $record->created_at->month === Carbon::now()->month &&
                   $record->created_at->year === Carbon::now()->year;
        });
        $years = $allrecord->filter(function ($record) {
            return $record->created_at->year === Carbon::now()->year;
        });
        // $records = Allrecord::whereDate('created_at', Carbon::today())->get();
        // $month = Allrecord::whereMonth('created_at', Carbon::now()->month)->get();
        // $year =Allrecord::whereYear('created_at', Carbon::now()->year);
        return view('home',compact('days', 'months', 'years'));
    }

    public function search(Request $request)
    {
         $search = $request->input('query');

        $allrecords =Allrecord::where('vendor_name',$search)->orWhere('truck_number',$search)->orWhere('customer_name',$search)->orWhere('created_at','like',$search.'%')->orderBy('created_at', 'desc')->paginate(10);
        return view('all-records',compact('allrecords'));
    }
    public function vendor(Request $request)
{
    $query = DB::table('allrecords')
        ->select('vendor_name',
            DB::raw('COUNT(*) as total_trucks'),
            DB::raw('SUM(amount_paid_to_vendor) as total_paid'),
            DB::raw('SUM(amount_to_pay_to_vendor) as total_due'))
        ->groupBy('vendor_name');

    // Apply filter only if vendor is provided
    if ($request->filled('vendor')) {
        $query->having('vendor_name', '=', $request->vendor); // use `having` because vendor_name is in select & group by
    }

    $allrecords = $query->paginate(5);

    return view('vendor', compact('allrecords'));
}


    public function customer(Request $request){

        $query = DB::table('allrecords')
        ->select('customer_name',
            DB::raw('COUNT(*) as total_trucks'),
            DB::raw('SUM(recieved_amount_from_customer) as total_paid'),
            DB::raw('SUM(remaining_amount_to_customer) as total_due'))
        ->groupBy('customer_name');

    // Apply filter only if vendor is provided
    if ($request->filled('customer')) {
        $query->having('customer_name', '=', $request->customer); // use `having` because vendor_name is in select & group by
    }

    $allrecords = $query->paginate(5);

        return view('customer',compact('allrecords'));
    }
}
