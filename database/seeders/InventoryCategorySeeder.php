<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InventoryCategory;


class InventoryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [

            [
                'name'=>'Living Room',
                'display_order'=>1
            ],

            [
                'name'=>'Bedroom',
                'display_order'=>2
            ],

            [
                'name'=>'Kitchen',
                'display_order'=>3
            ],

            [
                'name'=>'Electronics',
                'display_order'=>4
            ],

            [
                'name'=>'Office',
                'display_order'=>5
            ],

            [
                'name'=>'Vehicles',
                'display_order'=>6
            ],

            [
                'name'=>'Outdoor',
                'display_order'=>7
            ],

            [
                'name'=>'Miscellaneous',
                'display_order'=>8
            ]

        ];

        foreach($categories as $category){

            InventoryCategory::create($category);

        }
    }
}
