<?php

namespace App\Services;

use App\Http\Requests\BookingInventoryRequest;
use App\Models\Booking;
use App\Models\BookingInventory;
use App\Models\InventoryItem;
use DB;

class BookingService
{
    public function createBooking($request)
    {
        $booking = Booking::create([

            'booking_no' => $this->generateBookingNo(),

            'customer_name' => $request->customer_name,

            'phone' => $request->phone,

            'email' => $request->email,

            'relocation_type' => $request->relocation_type,

            'pickup_city_id' => $request->pickup_city,

            'pickup_address' => $request->pickup_address,


            'destination_city_id' => $request->destination_city,

            'destination_address' => $request->destination_address,

            'status' => 'Pending'

        ]);

        return $booking;
    }

    private function generateBookingNo()
    {
        $prefix = 'MSP' . date('Ymd');

        $lastBooking = Booking::whereDate('created_at', today())
            ->latest()
            ->first();

        if ($lastBooking) {

            $number = (int) substr($lastBooking->booking_no, -4) + 1;

        } else {

            $number = 1;

        }

        return $prefix . str_pad($number, 4, '0', STR_PAD_LEFT);
    }
    public function saveInventory(
        Booking $booking,
        BookingInventoryRequest $request
    ) {

        DB::transaction(function () use ($booking, $request) {

            $booking->update([

                'configuration' => $request->configuration,

                'moving_date' => $request->moving_date,

                'moving_time' => $request->moving_time,

                'pickup_floor' => $request->pickup_floor,

                'pickup_lift' => $request->pickup_lift,

                'destination_floor' => $request->destination_floor,

                'destination_lift' => $request->destination_lift,

                'packing_required' => $request->has('packing_required'),

                'loading_required' => $request->has('loading_required'),

                'unloading_required' => $request->has('unloading_required'),

                'unpacking_required' => $request->has('unpacking_required'),

                'insurance_required' => $request->has('insurance_required'),

                'storage_required' => $request->has('storage_required'),

                'vehicle_type' => $request->vehicle_type,

                'remarks' => $request->remarks

            ]);

            BookingInventory::where('booking_id', $booking->id)
                ->delete();

            foreach ($request->inventory as $itemId => $inventory) {

                if (!isset($inventory['selected']))
                    continue;

                $item = InventoryItem::find($itemId);

                if (!$item)
                    continue;

                BookingInventory::create([

                    'booking_id' => $booking->id,

                    // 'inventory_category_id' => $item->inventory_category_id,

                    'inventory_item_id' => $itemId,

                    'quantity' => $inventory['quantity'] ?? 1

                ]);

            }

        });
    }
}