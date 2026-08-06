<?php

namespace App\Http\Controllers;

use App\Mail\CustomerNotificationMail;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(Request $request, Response $response)
    {
        // Mail::to('info@movesmartplus.com')->send(new CustomerNotificationMail());
        $cities = City::where('status', 1)->orderBy('city_name') ->get();
        $seo = [];
        return view("home-page", compact('cities','seo'));
    }
    public function contactUs(Request $request, Response $response)
    {
        return view("contact-us");
    }
    public function services(Request $request, Response $response)
    {
        $seo = [
            'title' => 'Packers and Movers Services in India | MoveSmartPlus',

            'description' => 'Explore MoveSmartPlus professional packers and movers services including home shifting, office relocation, local moving, car transportation, bike transportation, packing, loading, unloading, and warehouse storage across India.',

            'keywords' => 'packers and movers services, home shifting, office relocation, local moving, warehouse storage, car transportation, bike transportation, packing services, loading unloading, furniture moving, relocation company, movers and packers India',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Professional Packers and Movers Services | MoveSmartPlus',

            'og_description' => 'Professional home shifting, office relocation, vehicle transport, warehouse storage and packing services across India.',

            'og_image' => asset('images/seo/services-banner.jpg'),

            'og_url' => url()->current(),

            'twitter_title' => 'Packers and Movers Services | MoveSmartPlus',

            'twitter_description' => 'Trusted home shifting, office relocation and vehicle transport services across India.',

            'twitter_image' => public_url('images/seo/services-banner.jpg'),
        ];
        return view("services.service",compact('seo'));
    }
    public function homeShifting(Request $request, Response $response)
    {
        $seo = [
            'title' => 'Home Shifting Services in India | House Packers and Movers | MoveSmartPlus',

            'description' => 'MoveSmartPlus offers professional home shifting services across India. Get safe packing, loading, transportation, unloading, and unpacking for household relocation at affordable prices. Book trusted house packers and movers today.',

            'keywords' => 'home shifting services, house shifting, home relocation, household shifting, house packers and movers, home movers, local home shifting, intercity home shifting, residential relocation, furniture shifting, apartment shifting, villa relocation, packers and movers India, MoveSmartPlus',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Professional Home Shifting Services | MoveSmartPlus',

            'og_description' => 'Relocate your home safely with MoveSmartPlus. Professional packing, secure transportation, careful loading & unloading, and hassle-free household shifting services across India.',

            'og_image' => public_url('images/services/page/home-shift.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Home Shifting Services | MoveSmartPlus',

            'twitter_description' => 'Trusted home shifting and household relocation services with professional packers and movers across India.',

            'twitter_image' =>public_url('images/services/page/home-shift.png'),
        ];
        return view("services.home-service",compact('seo'));
    }
}
