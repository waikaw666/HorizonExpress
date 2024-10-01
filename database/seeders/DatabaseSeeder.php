<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\Destination;
use App\Models\Origin;
use App\Models\Schedule;
use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ScheduleFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $admin = new Admin();
        $admin->name = 'Admin User';
        $admin->email = 'admin@example.com';
        $admin->role = 'owner';
        $admin->password = bcrypt('password'); // Hash the password
        $admin->save();

        $cities = ["yangon","mandalay","lashio","taungyi","pyinoolwin","bagan","naypyitaw","mawlamyine","pathein","sittwe","myitkyina","loikaw","dawei"];

        for($i=0; $i<count($cities); $i++){
            Origin::factory()->create([
                'origin_name' => $cities[$i],
            ]);

            Destination::factory()->create([
                'destination_name' => $cities[$i],
            ]);
        }

        $origins = Origin::all();
        $destinations = Origin::all();

        for ($i = 0; $i < count($origins); $i++) {
            for ($j = 0; $j < count($destinations); $j++) {
                if ($origins[$i]->id != $destinations[$j]->id) {
                    \App\Models\BusRoute::factory()->create([
                        'origin_id' => $origins[$i]->id,
                        'destination_id' => $destinations[$j]->id,
                    ]);
                }
            }
        }

        $bus_route = BusRoute::first();

        $bus = Bus::create([
            'bus_type' => 'AC',
            'plate_number' => 'ABC123',
            'description' => 'This is a sample bus',
        ]);


        $schedules = Schedule::create([
            'bus_route_id'=> $bus_route->id,
            'bus_id' => $bus->id,
            'price'=> '15000',
            'departure_time' => '10:00 AM',
            'arrival_time' => '12:00 PM',
            'date' => '2024-08-12',
            'duration' => '2 hours',
        ]);
    }
}
