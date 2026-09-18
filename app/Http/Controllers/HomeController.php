<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $seo = [
            'title' => 'Contact MoveSmartPlus | Get Free Packers and Movers Quote',

            'description' => 'Contact MoveSmartPlus for professional home shifting, office relocation, vehicle transportation, packing, unpacking, and storage services across India. Get a free moving quote, expert assistance, and reliable customer support today.',

            'keywords' => 'contact MoveSmartPlus, contact packers and movers, moving company contact, get moving quote, free relocation quote, home shifting contact, office relocation contact, packers and movers customer support, moving services India, relocation assistance',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Contact MoveSmartPlus | Trusted Packers and Movers',

            'og_description' => 'Have questions about your move? Contact MoveSmartPlus for expert guidance, free quotations, and reliable home shifting, office relocation, and vehicle transportation services across India.',

            // 'og_image' => asset('images/seo/contact-banner.jpg'),

            'og_url' => url()->current(),

            'twitter_title' => 'Contact MoveSmartPlus | Get a Free Moving Quote',

            'twitter_description' => 'Reach out to MoveSmartPlus for trusted packers and movers services, free relocation quotes, and professional moving assistance across India.',

            // 'twitter_image' => asset('images/seo/contact-banner.jpg'),
        ];
        return view("contact-us",compact('seo'));
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
    public function officeRelocation(Request $request, Response $response)
    {
        $seo = [
            'title' => 'Office Relocation Services in Bihar & Jharkhand | MoveSmartPlus',

            'description' => 'MoveSmartPlus provides professional office relocation services in Bihar & Jharkhand, covering office packing, IT equipment handling, furniture moving and weekend relocation to keep business downtime to a minimum.',

            'keywords' => 'office relocation services, office shifting services, office movers, office relocation Bihar, office relocation Jharkhand, corporate relocation, business office moving',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Office Relocation Services | MoveSmartPlus',

            'og_description' => 'Professional office and corporate relocation services in Bihar & Jharkhand, including packing, IT equipment handling, and furniture moving with minimal business downtime.',

            'og_image' => public_url('images/services/office-relocation.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Office Relocation Services | MoveSmartPlus',

            'twitter_description' => 'Corporate and small office relocation across Bihar & Jharkhand, handled by trained movers.',

            'twitter_image' => public_url('images/services/office-relocation.png'),
        ];
        return view("services.office-relocation",compact('seo'));
    }
    public function warehouseStorage(Request $request, Response $response)
    {
        $seo = [
            'title' => 'Warehouse Storage Services in Bihar & Jharkhand | MoveSmartPlus',

            'description' => 'MoveSmartPlus offers warehouse storage services in Bihar & Jharkhand for household goods and business inventory, with short-term and long-term storage plans and pickup & delivery support.',

            'keywords' => 'warehouse storage services, goods storage, storage services Bihar, storage services Jharkhand, household goods storage, business inventory storage',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Warehouse Storage Services | MoveSmartPlus',

            'og_description' => 'Short-term and long-term warehouse storage for household goods and business inventory across Bihar & Jharkhand.',

            'og_image' => public_url('images/services/warehouse.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Warehouse Storage Services | MoveSmartPlus',

            'twitter_description' => 'Secure, organized storage for household and business goods across Bihar & Jharkhand.',

            'twitter_image' => public_url('images/services/warehouse.png'),
        ];
        return view("services.warehouse-storage",compact('seo'));
    }
    public function localMoving(Request $request, Response $response)
    {
        $seo = [
            'title' => 'Local Moving Services in Bihar & Jharkhand | MoveSmartPlus',

            'description' => 'MoveSmartPlus provides local moving services in Bihar & Jharkhand for same-city house shifting, with packing, loading, transportation, unloading and furniture handling.',

            'keywords' => 'local moving services, local packers and movers, local shifting services, house shifting services, same city shifting',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Local Moving Services | MoveSmartPlus',

            'og_description' => 'Same-city house shifting across Bihar & Jharkhand with professional packing, loading and furniture handling.',

            'og_image' => public_url('images/services/local-moving.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Local Moving Services | MoveSmartPlus',

            'twitter_description' => 'Quick and organized local shifting within your city, handled by trained movers.',

            'twitter_image' => public_url('images/services/local-moving.png'),
        ];
        return view("services.local-moving",compact('seo'));
    }
    public function carTransportation(Request $request, Response $response)
    {
        $seo = [
            'title' => 'Car Transportation Services in Bihar & Jharkhand | MoveSmartPlus',

            'description' => 'MoveSmartPlus offers car transportation services in Bihar & Jharkhand with door-to-door pickup, careful loading and vehicle inspection before and after transit.',

            'keywords' => 'car transportation services, car transport service, car shifting service, car transport Bihar, car transport Jharkhand',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Car Transportation Services | MoveSmartPlus',

            'og_description' => 'Door-to-door car transportation across Bihar & Jharkhand with vehicle inspection and careful handling at every stage.',

            'og_image' => public_url('images/services/car-transport.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Car Transportation Services | MoveSmartPlus',

            'twitter_description' => 'Safe, door-to-door car transportation across Bihar & Jharkhand.',

            'twitter_image' => public_url('images/services/car-transport.png'),
        ];
        return view("services.car-transportation",compact('seo'));
    }
    public function bikeTransportation(Request $request, Response $response)
    {
        $seo = [
            'title' => 'Bike Transportation Services in Bihar & Jharkhand | MoveSmartPlus',

            'description' => 'MoveSmartPlus offers bike transportation services in Bihar & Jharkhand with pickup, careful packing, inspection and doorstep delivery for motorcycles and scooters.',

            'keywords' => 'bike transportation service, bike transport service, motorcycle transportation, bike shifting service',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Bike Transportation Services | MoveSmartPlus',

            'og_description' => 'Pickup, packing, and doorstep delivery for bike transportation across Bihar & Jharkhand.',

            'og_image' => public_url('images/services/bike-transport.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Bike Transportation Services | MoveSmartPlus',

            'twitter_description' => 'Careful bike packing and transportation across Bihar & Jharkhand.',

            'twitter_image' => public_url('images/services/bike-transport.png'),
        ];
        return view("services.bike-transportation",compact('seo'));
    }
    public function about(Request $request, Response $response)
    {
        $seo = [
            'title' => 'About Move Smart Plus | Packers and Movers in Bihar & Jharkhand',

            'description' => 'Move Smart Plus is a packers and movers company serving Bihar and Jharkhand, offering home shifting, office relocation, vehicle transportation and warehouse storage with careful handling and transparent communication.',

            'keywords' => 'about MoveSmartPlus, packers and movers Bihar, packers and movers Jharkhand, moving company Bihar Jharkhand',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'About Move Smart Plus | Packers and Movers in Bihar & Jharkhand',

            'og_description' => 'Learn about Move Smart Plus and the home shifting, office relocation, and vehicle transportation services we provide across Bihar and Jharkhand.',

            'og_image' => public_url('images/services/page/home-shift.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'About Move Smart Plus',

            'twitter_description' => 'Packers and movers serving Bihar and Jharkhand with home shifting, office relocation and vehicle transportation.',

            'twitter_image' => public_url('images/services/page/home-shift.png'),
        ];
        return view("pages.about-us",compact('seo'));
    }
    public function timeline(Request $request, Response $response)
    {
        $seo = [
            'title' => 'How We Move You | Our Relocation Process | MoveSmartPlus',

            'description' => 'See how MoveSmartPlus takes your move from first enquiry to final delivery, covering booking, packing, loading, transportation, unloading and after-move support.',

            'keywords' => 'moving process, relocation process, packers and movers process Bihar, how packers and movers work',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Our Relocation Process | MoveSmartPlus',

            'og_description' => 'From enquiry to delivery: the step-by-step process MoveSmartPlus follows for every move.',

            'og_image' => public_url('images/services/page/loading.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Our Relocation Process | MoveSmartPlus',

            'twitter_description' => 'The step-by-step process behind every MoveSmartPlus move.',

            'twitter_image' => public_url('images/services/page/loading.png'),
        ];
        return view("pages.timeline",compact('seo'));
    }
    public function mission(Request $request, Response $response)
    {
        $seo = [
            'title' => 'Our Mission | MoveSmartPlus Packers and Movers',

            'description' => 'MoveSmartPlus is built around safe relocation, reliable service and transparent communication for customers moving homes and offices across Bihar and Jharkhand.',

            'keywords' => 'MoveSmartPlus mission, reliable packers and movers, safe relocation Bihar Jharkhand',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Our Mission | MoveSmartPlus',

            'og_description' => 'Why MoveSmartPlus exists and what we work towards on every move across Bihar and Jharkhand.',

            'og_image' => public_url('images/services/page/unloading.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Our Mission | MoveSmartPlus',

            'twitter_description' => 'Safe relocation and transparent service across Bihar and Jharkhand.',

            'twitter_image' => public_url('images/services/page/unloading.png'),
        ];
        return view("pages.our-mission",compact('seo'));
    }
    public function privacyPolicy(Request $request, Response $response)
    {
        $seo = [
            'title' => 'Privacy Policy | MoveSmartPlus',

            'description' => 'Read the MoveSmartPlus privacy policy to understand what information we collect, how it is used, and the choices available to you.',

            'keywords' => 'MoveSmartPlus privacy policy',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Privacy Policy | MoveSmartPlus',

            'og_description' => 'How MoveSmartPlus collects, uses and protects your information.',

            'og_image' => public_url('images/smart-move-plus.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Privacy Policy | MoveSmartPlus',

            'twitter_description' => 'How MoveSmartPlus collects, uses and protects your information.',

            'twitter_image' => public_url('images/smart-move-plus.png'),
        ];
        return view("pages.privacy-policy",compact('seo'));
    }
    public function terms(Request $request, Response $response)
    {
        $seo = [
            'title' => 'Terms & Conditions | MoveSmartPlus',

            'description' => 'The terms and conditions that apply when you book a home shifting, office relocation, storage or vehicle transportation service with MoveSmartPlus.',

            'keywords' => 'MoveSmartPlus terms and conditions',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Terms & Conditions | MoveSmartPlus',

            'og_description' => 'The terms that apply when you book a service with MoveSmartPlus.',

            'og_image' => public_url('images/smart-move-plus.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Terms & Conditions | MoveSmartPlus',

            'twitter_description' => 'The terms that apply when you book a service with MoveSmartPlus.',

            'twitter_image' => public_url('images/smart-move-plus.png'),
        ];
        return view("pages.terms-and-conditions",compact('seo'));
    }
}
