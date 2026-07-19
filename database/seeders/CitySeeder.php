<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cities = [

            ['city_name' => 'Delhi', 'state_name' => 'Delhi'],

            ['city_name' => 'Noida', 'state_name' => 'Uttar Pradesh'],

            ['city_name' => 'Gurgaon', 'state_name' => 'Haryana'],

            ['city_name' => 'Faridabad', 'state_name' => 'Haryana'],

            ['city_name' => 'Ghaziabad', 'state_name' => 'Uttar Pradesh'],

            ['city_name' => 'Mumbai', 'state_name' => 'Maharashtra'],

            ['city_name' => 'Pune', 'state_name' => 'Maharashtra'],

            ['city_name' => 'Bengaluru', 'state_name' => 'Karnataka'],

            ['city_name' => 'Hyderabad', 'state_name' => 'Telangana'],

            ['city_name' => 'Chennai', 'state_name' => 'Tamil Nadu'],

        ];

        foreach ($cities as $city) {
            \App\Models\City::create($city);
        }
    }
}
