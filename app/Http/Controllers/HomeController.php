<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $cities = City::where('status', 1)
            ->orderBy('city_name')
            ->get();
        return view("home-page", compact('cities'));
    }
    public function contactUs(Request $request, Response $response)
    {
        return view("contact-us");
    }
}
