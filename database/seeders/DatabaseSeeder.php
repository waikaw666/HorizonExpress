<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Origin;
use App\Models\Schedule;
use App\Models\User;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $cities = ["yangon","mandalay","lashio","taungyi","pyinoolwin","bagan","naypyitaw","mawlamyine","pathein","sittwe","myitkyina","loikaw","dawei"];

        for($i=0; $i<count($cities); $i++){
            Origin::factory()->create([
                'origin_name' => $cities[$i],
            ]);

            Destination::factory()->create([
                'destination_name' => $cities[$i],
            ]);
        }




    }
}
