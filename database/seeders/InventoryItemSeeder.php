<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InventoryItem;

class InventoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $items = [

        1 => [

            '3 Seater Sofa',

            '2 Seater Sofa',

            'Single Sofa',

            'Center Table',

            'Coffee Table',

            'TV Unit',

            'LED TV',

            'Smart TV',

            'Dining Table',

            'Dining Chair',

            'Bookshelf',

            'Showcase',

            'Shoe Rack',

            'Carpet',

            'Curtains'

        ],

        2 => [

            'King Bed',

            'Queen Bed',

            'Single Bed',

            'Mattress',

            'Wardrobe',

            'Dressing Table',

            'Study Table',

            'Chair',

            'Side Table',

            'Baby Cot'

        ],

        3 => [

            'Refrigerator',

            'Deep Freezer',

            'Microwave',

            'Gas Stove',

            'Gas Cylinder',

            'Mixer Grinder',

            'RO Water Purifier',

            'Dishwasher',

            'Utensil Box',

            'Kitchen Rack'

        ],

        4 => [

            'Air Conditioner',

            'Cooler',

            'Washing Machine',

            'Dryer',

            'Laptop',

            'Desktop',

            'Printer',

            'UPS',

            'Inverter',

            'Battery',

            'Speaker',

            'Projector'

        ],

        5 => [

            'Office Table',

            'Office Chair',

            'Conference Table',

            'Filing Cabinet',

            'CPU',

            'Monitor',

            'Printer',

            'Scanner',

            'Server Rack',

            'Office Sofa'

        ],

        6 => [

            'Motorcycle',

            'Scooter',

            'Bicycle'

        ],

        7 => [

            'Plant',

            'Garden Table',

            'Garden Chair',

            'Ladder'

        ],

        8 => [

            'Suitcase',

            'Carton Box',

            'Plastic Box',

            'Temple',

            'Gym Equipment',

            'Treadmill',

            'Water Dispenser',

            'Mirror',

            'Clock',

            'Toy Box'

        ]

    ];

    foreach($items as $category=>$inventory){

        foreach($inventory as $index=>$item){

            InventoryItem::create([

                'category_id'=>$category,

                'item_name'=>$item,

                'display_order'=>$index+1

            ]);

        }

    }

}
}
