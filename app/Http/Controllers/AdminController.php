<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function bookings()
    {
        $bookings = Booking::all();
        return view('admin.bookings',["bookings"=>$bookings]);
    }
}
