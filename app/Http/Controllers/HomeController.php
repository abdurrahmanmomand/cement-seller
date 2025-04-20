<?php

namespace App\Http\Controllers;

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
}
