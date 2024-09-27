<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Schedule;
use Illuminate\Http\Request;

class SearchResultController extends Controller
{
    public function __invoke(Request $request)
    {
        $busType = request()->input('busType');

        $originName = request()->input('origin');
//        dd($busType, $originName);
            $scheduleResult = Schedule::whereHas('bus', function ($query) use ($busType) {
                $query->where('bus_type', $busType);
            })->

            whereHas('origin', function ($query) use ($originName){
                $query->where('origin_name', $originName);
            })->get();
//        $scheduleResult = Schedule::join('buses', 'schedules.bus_id', '=', 'buses.id')
//            ->join('origins', 'schedules.origin_id', '=', 'origins.id')
//            ->where('buses.bus_type', $busType)
//            ->where('origins.origin_name', $originName)
//            ->select('schedules.*')
//            ->get();

//        $schedules = Schedule::with(['bus', 'origin'])->get();



        dd($scheduleResult);



    }
}
//        $results = Bus::where('bus_type' ,'=', request('busType'))->get();
//        return view('search-result', compact('results'));

//        $request = Request('origin');

//
//$origin= $scheduleResult->origin->origin_name;


//        $scheduleResult = Schedule::whereHas('origin' , function($query) use ($request){
//                $query->where('origin', $request);

// hello test
