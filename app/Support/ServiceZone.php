<?php

namespace App\Support;

/**
 * Real district-level coverage for the homepage Service Zone section.
 *
 * These are the actual administrative districts of Bihar and Jharkhand
 * (public record, not project-specific data) — used to make the "50+
 * districts" coverage figure concrete without inventing place names.
 * This lists administrative geography, not a guarantee that every
 * district has confirmed active service; the homepage copy makes that
 * distinction explicit.
 */
class ServiceZone
{
    public static function states(): array
    {
        return [
            [
                'name' => 'Bihar',
                'districts' => [
                    'Araria', 'Arwal', 'Aurangabad', 'Banka', 'Begusarai', 'Bhagalpur',
                    'Bhojpur', 'Buxar', 'Darbhanga', 'East Champaran', 'Gaya', 'Gopalganj',
                    'Jamui', 'Jehanabad', 'Kaimur', 'Katihar', 'Khagaria', 'Kishanganj',
                    'Lakhisarai', 'Madhepura', 'Madhubani', 'Munger', 'Muzaffarpur', 'Nalanda',
                    'Nawada', 'Patna', 'Purnia', 'Rohtas', 'Saharsa', 'Samastipur', 'Saran',
                    'Sheikhpura', 'Sheohar', 'Sitamarhi', 'Siwan', 'Supaul', 'Vaishali',
                    'West Champaran',
                ],
            ],
            [
                'name' => 'Jharkhand',
                'districts' => [
                    'Bokaro', 'Chatra', 'Deoghar', 'Dhanbad', 'Dumka', 'East Singhbhum',
                    'Garhwa', 'Giridih', 'Godda', 'Gumla', 'Hazaribagh', 'Jamtara', 'Khunti',
                    'Koderma', 'Latehar', 'Lohardaga', 'Pakur', 'Palamu', 'Ramgarh', 'Ranchi',
                    'Sahibganj', 'Seraikela Kharsawan', 'Simdega', 'West Singhbhum',
                ],
            ],
        ];
    }

    public static function totalDistricts(): int
    {
        return collect(self::states())->sum(fn ($state) => \count($state['districts']));
    }
}
