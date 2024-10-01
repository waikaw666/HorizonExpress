<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Origin;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Driver;
use App\Models\Bus;
use App\Models\BusRoute;


class DataController extends Controller
{
    public function create_origins(Request $request)
    {
        $origin = new Origin();
        $origin->name = $request->name;

        $origin->save();

        return response()->json([
            'message' => 'Origin created successfully'
        ]);
    }

    public function update_origins(Request $request, $id)
    {
        $origin = Origin::find($id);

        if($origin) {
            $origin->name = $request->name;

            $origin->save();

            return response()->json([
                'message' => 'Origin updated successfully'
            ]);
        }

        return response()->json([
            'message' => 'Origin not found'
        ], 404);
    }

    public function delete_origins(Request $request, $id)
    {
        $origin = Origin::find($id);

        if($origin) {
            $origin->delete();
            return response()->json([
                'message' => 'Origin deleted successfully'
            ]);
        }

        return response()->json([
            'message' => 'Origin not found'
        ], 404);
    }

    public function create_destinations(Request $request)
    {
        $destination = new Destination();
        $destination->name = $request->name;

        $destination->save();

        return response()->json([
            'message' => 'Destination created successfully'
        ]);
    }

    public function update_destinations(Request $request, $id)
    {
        $destination = Destination::find($id);

        if($destination) {
            $destination->name = $request->name;

            $destination->save();

            return response()->json([
                'message' => 'Destination updated successfully'
            ]);
        }

        return response()->json([
            'message' => 'Destination not found'
        ], 404);
    }

    public function delete_destinations(Request $request, $id)
    {
        $destination = Destination::find($id);

        if($destination) {
            $destination->delete();
            return response()->json([
                'message' => 'Destination deleted successfully'
            ]);
        }

        return response()->json([
            'message' => 'Destination not found'
        ], 404);
    }

    public function create_schedules(Request $request)
    {
        $schedule = new Schedule();
        $schedule->bus_id = $request->bus_id;
        $schedule->departure_time = $request->departure_time;
        $schedule->arrival_time = $request->arrival_time;
        $schedule->date = $request->date;
        $schedule->price = $request->price;
        $schedule->duration = $request->duration;

        $schedule->save();

        return response()->json([
            'message' => 'Schedule created successfully'
        ]);
    }


    public function update_schedules(Request $request, $id)
    {

        $schedule = Schedule::find($id);

        if($schedule) {
            $schedule->bus_id = $request->bus_id;
            $schedule->departure_time = $request->departure_time;
            $schedule->arrival_time = $request->arrival_time;
            $schedule->date = $request->date;
            $schedule->price = $request->price;
            $schedule->duration = $request->duration;

            $schedule->save();

            return response()->json([
                'message' => 'Schedule updated successfully'
            ]);
        }

        return response()->json([
            'message' => 'Schedule not found'
        ], 404);
    }

    public function delete_schedules(Request $request, $id)
    {
        $schedule = Schedule::find($id);

        if($schedule) {
            $schedule->delete();
            return response()->json([
                'message' => 'Schedule deleted successfully'
            ]);
        }

        return response()->json([
            'message' => 'Schedule not found'
        ], 404);
    }


    public function create_drivers(Request $request)
    {
        $driver = new Driver();
        $driver->name = $request->name;
        $driver->phone = $request->phone;
        $driver->email = $request->email;

        $driver->save();

        return response()->json([
            'message' => 'Driver created successfully'
        ]);
    }

    public function update_drivers(Request $request, $id)
    {
        $driver = Driver::find($id);

        if($driver) {
            $driver->name = $request->name;
            $driver->phone = $request->phone;
            $driver->email = $request->email;

            $driver->save();

            return response()->json([
                'message' => 'Driver updated successfully'
            ]);
        }

        return response()->json([
            'message' => 'Driver not found'
        ], 404);
    }

    public function delete_drivers(Request $request, $id)
    {
        $driver = Driver::find($id);

        if($driver) {
            $driver->delete();
            return response()->json([
                'message' => 'Driver deleted successfully'
            ]);
        }

        return response()->json([
            'message' => 'Driver not found'
        ], 404);
    }


    public function create_buses(Request $request)
    {
        $bus = new Bus();
        $bus->name = $request->name;
        $bus->number_plate = $request->number_plate;
        $bus->total_seats = $request->total_seats;

        $bus->save();

        return response()->json([
            'message' => 'Bus created successfully'
        ]);
    }

    public function update_buses(Request $request, $id)
    {
        $bus = Bus::find($id);

        if($bus) {
            $bus->name = $request->name;
            $bus->number_plate = $request->number_plate;
            $bus->total_seats = $request->total_seats;

            $bus->save();

            return response()->json([
                'message' => 'Bus updated successfully'
            ]);
        }

        return response()->json([
            'message' => 'Bus not found'
        ], 404);
    }

    public function delete_buses(Request $request, $id)
    {
        $bus = Bus::find($id);

        if($bus) {
            $bus->delete();
            return response()->json([
                'message' => 'Bus deleted successfully'
            ]);
        }

        return response()->json([
            'message' => 'Bus not found'
        ], 404);
    }

    public function create_bus_routes(Request $request)
    {
        $bus_route = new BusRoute();
        $bus_route->origin_id = $request->origin_id;
        $bus_route->destination_id = $request->destination_id;
        $bus_route->price = $request->price;

        $bus_route->save();

        return response()->json([
            'message' => 'Bus Route created successfully'
        ]);
    }

    public function update_bus_routes(Request $request, $id)
    {
        $bus_route = BusRoute::find($id);

        if($bus_route) {
            $bus_route->origin_id = $request->origin_id;
            $bus_route->destination_id = $request->destination_id;
            $bus_route->price = $request->price;

            $bus_route->save();

            return response()->json([
                'message' => 'Bus Route updated successfully'
            ]);
        }

        return response()->json([
            'message' => 'Bus Route not found'
        ], 404);
    }

    public function delete_bus_routes(Request $request, $id)
    {
        $bus_route = BusRoute::find($id);

        if($bus_route) {
            $bus_route->delete();
            return response()->json([
                'message' => 'Bus Route deleted successfully'
            ]);
        }

        return response()->json([
            'message' => 'Bus Route not found'
        ], 404);
    }
}
