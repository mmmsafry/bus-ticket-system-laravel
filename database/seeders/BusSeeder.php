<?php

namespace Database\Seeders;

use App\Models\Bus as Bus;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bus::insert([
            [
                'name' => 'Colombo-Kandy',
                'vehicle_no' => 'NP-3131',
                'created_at' => now(),
            ],
            [
                'name' => 'Colombo-Negombo',
                'vehicle_no' => 'WP-4566',
                'created_at' => now(),
            ],
            [
                'name' => 'Colombo-Gall',
                'vehicle_no' => 'WP-4788',
                'created_at' => now(),
            ],
            [
                'name' => 'Colombo-Gampaha',
                'vehicle_no' => 'WP-7888',
                'created_at' => now(),
            ],
            [
                'name' => 'Colombo-Anuradapura',
                'vehicle_no' => 'WP-9964',
                'created_at' => now(),
            ],

        ]);
    }
}
