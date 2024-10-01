<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\Destination;
use App\Models\Driver;
use App\Models\Origin;
use App\Models\ReservedSeat;
use App\Models\Schedule;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        $bookings = Booking::all();
        $busRoutes = BusRoute::all();
        $buses = Bus::all();
        $drivers = Driver::all();
        $reservedSeats = ReservedSeat::all();

        return view('admin.index', compact('schedules', 'bookings', 'busRoutes', 'buses', 'drivers', 'reservedSeats'));
    }

    public function schedules(){
        $schedules = Schedule::all();
        return view('admin.schedules',['schedules'=>$schedules]);
    }


    public function drivers(){
        $drivers = Driver::all();

        return view('admin.drivers',['drivers'=>$drivers]);
    }

    public  function bus_routes()
    {
        $bus_routes = BusRoute::all();
        return view('admin.bus_routes',['bus_routes'=>$bus_routes]);
    }

    public function buses()
    {
        $buses = Bus::all();
        return view('admin.buses',["buses"=>$buses]);
    }

    public function bookings()
    {
        $bookings = Booking::all();
        return view('admin.bookings',["bookings"=>$bookings]);
    }

    public function origins()
    {
        $origins = Origin::all();
        return view('admin.origins',["origins"=>$origins]);
    }


    public function destinations()
    {
        $destinations = Destination::all();
        return view('admin.destinations',['destinations'=>$destinations]);
    }
}
