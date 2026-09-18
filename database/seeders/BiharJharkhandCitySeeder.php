<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class BiharJharkhandCitySeeder extends Seeder
{
    /**
     * Seed the real cities Move Smart Plus actually serves (Bihar & Jharkhand),
     * for the booking form's pickup/destination city selectors.
     *
     * The pre-existing `cities` table only contained unrelated pan-India demo
     * data (Delhi, Mumbai, Pune, etc.) — none of it Bihar/Jharkhand. This
     * seeder is additive and duplicate-safe (firstOrCreate on the same
     * city_name + state_name unique constraint the table already enforces).
     */
    public function run()
    {
        $cities = [

            // Bihar
            ['city_name' => 'Patna', 'state_name' => 'Bihar'],
            ['city_name' => 'Bhagalpur', 'state_name' => 'Bihar'],
            ['city_name' => 'Gaya', 'state_name' => 'Bihar'],
            ['city_name' => 'Muzaffarpur', 'state_name' => 'Bihar'],
            ['city_name' => 'Darbhanga', 'state_name' => 'Bihar'],
            ['city_name' => 'Purnia', 'state_name' => 'Bihar'],
            ['city_name' => 'Begusarai', 'state_name' => 'Bihar'],
            ['city_name' => 'Katihar', 'state_name' => 'Bihar'],
            ['city_name' => 'Munger', 'state_name' => 'Bihar'],
            ['city_name' => 'Chhapra', 'state_name' => 'Bihar'],
            ['city_name' => 'Arrah', 'state_name' => 'Bihar'],
            ['city_name' => 'Bettiah', 'state_name' => 'Bihar'],
            ['city_name' => 'Motihari', 'state_name' => 'Bihar'],
            ['city_name' => 'Saharsa', 'state_name' => 'Bihar'],
            ['city_name' => 'Sasaram', 'state_name' => 'Bihar'],
            ['city_name' => 'Hajipur', 'state_name' => 'Bihar'],
            ['city_name' => 'Siwan', 'state_name' => 'Bihar'],
            ['city_name' => 'Buxar', 'state_name' => 'Bihar'],
            ['city_name' => 'Nawada', 'state_name' => 'Bihar'],
            ['city_name' => 'Jehanabad', 'state_name' => 'Bihar'],
            ['city_name' => 'Bihar Sharif', 'state_name' => 'Bihar'],
            ['city_name' => 'Madhubani', 'state_name' => 'Bihar'],
            ['city_name' => 'Samastipur', 'state_name' => 'Bihar'],

            // Jharkhand
            ['city_name' => 'Ranchi', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Jamshedpur', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Dhanbad', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Bokaro Steel City', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Hazaribagh', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Deoghar', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Giridih', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Ramgarh', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Phusro', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Medininagar', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Chaibasa', 'state_name' => 'Jharkhand'],
            ['city_name' => 'Dumka', 'state_name' => 'Jharkhand'],

        ];

        foreach ($cities as $city) {
            City::firstOrCreate(
                ['city_name' => $city['city_name'], 'state_name' => $city['state_name']],
                ['status' => true]
            );
        }
    }
}
