<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register_seat(){

        $id = request('id');
        $schedule = Schedule::find($id);


        return view('register.register_seat',['schedule'=>$schedule]);
    }

    public  function book(){
        $name = request('name');
        $phone = request('phone_number');
        $schedule_id = request('schedule_id');

        $booking = Booking::create(
            [
                'name'=>$name,
                'phone_number'=>$phone,
                'schedule_id'=>$schedule_id
            ]
        );

        return view('register.success');
    }
}
