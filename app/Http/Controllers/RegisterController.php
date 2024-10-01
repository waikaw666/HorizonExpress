<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ReservedSeat;
use App\Models\Schedule;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    // should have A1 to A4 to 8 rows

    private $seats = [];

    public function __construct() {
        $rows = range('A', 'H');
        $columns = range(1, 4); // Adjust the number of columns as needed

        foreach ($rows as $row) {
            foreach ($columns as $column) {
                $this->seats[] = [
                    'id' => $row . $column,
                    'status' => 'available', // You can set this to 'booked' or other statuses as needed
                ];
            }
        }
    }


    public function register_seat()
    {
        $id = request('id');
        $schedule = Schedule::find($id);

        $reserved_seats = ReservedSeat::where('schedule_id', $id)->get();
        $reserved_seats_id_list = $reserved_seats->pluck('seat_id')->toArray();

        return view('register.seat', [
            'schedule' => $schedule,
            'seats' => $this->seats,
            'reserved_seats' => $reserved_seats,
            'reserved_seats_id_list' => $reserved_seats_id_list,
        ]);
    }

    public function prebook(Request $request)

    {

    }

    public function book(Request $request)
    {
        $schedule_id = $request->input('schedule_id');
        $selected_seats = explode(',', $request->input('selected_seats'));
        $name = $request->input('name');
        $phone_number = $request->input('phone_number');

        $bus_route_id = Schedule::find($schedule_id)->bus_route_id;

        $booking = new Booking(
            [
                'schedule_id' => $schedule_id,
                'bus_route_id' => $bus_route_id,
                'name' => $name,
                'phone_number' => $phone_number,
            ]
        );

        // Process the booking logic
        foreach ($selected_seats as $seat_id) {
            ReservedSeat::create(
                [
                    'schedule_id' => $schedule_id,
                    'seat_id' => $seat_id,
                ]
            );
        }

        return redirect('/success');
    }

    public function success(){
        return view('register.success');
    }


}
