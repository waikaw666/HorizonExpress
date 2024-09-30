<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\Driver;
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

    public  function edit(){
        return view('admin.edit');
    }

    public function schedules(){
        $schedules = Schedule::all();
        return view('admin.schedules',['schedules'=>$schedules]);
    }

    public function create_schedules(){

    }

    public function update_schedule(){

    }

    public function drivers(){
        $drivers = Driver::all();

        return view('admin.drivers',['drivers'=>$drivers]);
    }

    public function create_driver(){

    }

    public  function update_driver(){

    }

    public function create_bus(){

    }

    public function update_bus(){

    }





    public function bookings()
    {
        $bookings = Booking::all();
        return view('admin.bookings',["bookings"=>$bookings]);
    }
}
