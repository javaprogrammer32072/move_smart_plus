<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminActivityLog;
use App\Models\Booking;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $cities = City::when($request->filled('search'), function ($q) use ($request) {
                $term = $request->search;
                $q->where(function ($q) use ($term) {
                    $q->where('city_name', 'like', "%{$term}%")
                        ->orWhere('state_name', 'like', "%{$term}%");
                });
            })
            ->orderBy('state_name')
            ->orderBy('city_name')
            ->paginate(25)
            ->withQueryString();

        return view('admin.cities.index', [
            'cities' => $cities,
            'filters' => $request->only('search'),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'city_name' => ['required', 'string', 'max:100'],
            'state_name' => ['required', 'string', 'max:100'],
            'pincode' => ['nullable', 'string', 'max:10'],
        ]);

        $data['status'] = true;

        $city = City::create($data);

        AdminActivityLog::record("Added city {$city->city_name}, {$city->state_name}", $city->city_name);

        return back()->with('success', 'City added.');
    }

    public function update(Request $request, City $city)
    {
        $data = $request->validate([
            'city_name' => ['required', 'string', 'max:100'],
            'state_name' => ['required', 'string', 'max:100'],
            'pincode' => ['nullable', 'string', 'max:10'],
            'status' => ['nullable', 'boolean'],
        ]);

        $data['status'] = $request->boolean('status');

        $city->update($data);

        AdminActivityLog::record("Updated city {$city->city_name}, {$city->state_name}", $city->city_name);

        return back()->with('success', 'City updated.');
    }

    public function destroy(City $city)
    {
        $inUse = Booking::where('pickup_city_id', $city->id)
            ->orWhere('destination_city_id', $city->id)
            ->exists();

        if ($inUse) {
            // Referenced by existing bookings — deactivate instead of
            // deleting, so booking history stays intact.
            $city->update(['status' => false]);

            AdminActivityLog::record("Deactivated city {$city->city_name} (in use by bookings)", $city->city_name);

            return back()->with('success', "{$city->city_name} is used by existing bookings, so it was deactivated instead of deleted.");
        }

        $name = $city->city_name;
        $city->delete();

        AdminActivityLog::record("Deleted city {$name}", $name);

        return back()->with('success', 'City deleted.');
    }
}
