<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HelpCenterController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[HomeController::class,'index']);
Route::get("/contact-us",[HomeController::class,'contactUs'])->name('contact-us');
Route::get("/services",[HomeController::class,'services'])->name('services.index');
Route::post('/contact', [ContactController::class, 'store']) ->name('contact.store');

Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/timeline', [HomeController::class, 'timeline'])->name('timeline');
Route::get('/our-mission', [HomeController::class, 'mission'])->name('mission');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('terms');

Route::get('/help-center', [HelpCenterController::class, 'index'])->name('help-center');

Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])
    ->name('newsletter.subscribe')
    ->middleware('throttle:5,1');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');


// Route::get('/', [BookingController::class, 'index'])->name('home');

Route::post('/booking/store',[BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/{booking}/inventory',[BookingController::class, 'inventory'])->name('booking.inventory');
Route::post('/booking/{booking}/inventory', [BookingController::class, 'saveInventory'])->name('booking.inventory.store');

Route::get('/booking/{booking}/success',[BookingController::class,'success'])->name('booking.success');

Route::get('/services/home-shifting',[HomeController::class,'homeShifting'])->name('services.home-shifting');
Route::get('/services/office-relocation',[HomeController::class,'officeRelocation'])->name('services.office-relocation');
Route::get('/services/warehouse-storage',[HomeController::class,'warehouseStorage'])->name('services.warehouse-storage');
Route::get('/services/local-moving',[HomeController::class,'localMoving'])->name('services.local-moving');
Route::get('/services/car-transportation',[HomeController::class,'carTransportation'])->name('services.car-transportation');
Route::get('/services/bike-transportation',[HomeController::class,'bikeTransportation'])->name('services.bike-transportation');