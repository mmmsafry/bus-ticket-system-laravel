<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Station::insert([
            ['name' => 'Colombo',  'created_at' => now()],
            ['name' => 'Kandy',  'created_at' => now()],
            ['name' => 'Gall',  'created_at' => now()],
            ['name' => 'Negombo',  'created_at' => now()],
            ['name' => 'Anuradapura',  'created_at' => now()],
        ]);
    }
}
