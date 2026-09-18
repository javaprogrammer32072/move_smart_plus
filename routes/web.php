<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HelpCenterController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TrackBookingController;

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

// Public booking tracking — no login required.
Route::get('/track-booking', [TrackBookingController::class, 'show'])->name('track-booking');

/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
|
| Everything below is new and additive: new routes only, nothing above
| this point changes. A single hardcoded admin account (see config/admin.php
| and .env) — no registration, no separate user table.
|
*/

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('login');

    // Only the actual login attempt is rate-limited, not viewing the page.
    Route::post('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])
        ->middleware('throttle:5,15')
        ->name('login.attempt');

    Route::post('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    Route::middleware('admin.auth')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

        Route::get('/bookings', [\App\Http\Controllers\Admin\BookingController::class, 'index'])->name('bookings.index');
        Route::get('/bookings/{booking}', [\App\Http\Controllers\Admin\BookingController::class, 'show'])->name('bookings.show');
        Route::patch('/bookings/{booking}/status', [\App\Http\Controllers\Admin\BookingController::class, 'updateStatus'])->name('bookings.status');

        Route::get('/cities', [\App\Http\Controllers\Admin\CityController::class, 'index'])->name('cities.index');
        Route::post('/cities', [\App\Http\Controllers\Admin\CityController::class, 'store'])->name('cities.store');
        Route::put('/cities/{city}', [\App\Http\Controllers\Admin\CityController::class, 'update'])->name('cities.update');
        Route::delete('/cities/{city}', [\App\Http\Controllers\Admin\CityController::class, 'destroy'])->name('cities.destroy');

        Route::get('/newsletter', [\App\Http\Controllers\Admin\NewsletterController::class, 'index'])->name('newsletter.index');
        Route::get('/newsletter/export', [\App\Http\Controllers\Admin\NewsletterController::class, 'export'])->name('newsletter.export');

        Route::get('/contact', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contact.index');
        Route::get('/contact/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'show'])->name('contact.show');
        Route::patch('/contact/{contact}/status', [\App\Http\Controllers\Admin\ContactController::class, 'updateStatus'])->name('contact.status');

        Route::get('/analytics', [\App\Http\Controllers\Admin\AnalyticsController::class, 'index'])->name('analytics.index');
        Route::get('/traffic', [\App\Http\Controllers\Admin\TrafficController::class, 'index'])->name('traffic.index');
        Route::get('/activity', [\App\Http\Controllers\Admin\ActivityLogController::class, 'index'])->name('activity.index');

        Route::get('/settings', [\App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings.index');
        Route::put('/settings/password', [\App\Http\Controllers\Admin\SettingsController::class, 'updatePassword'])->name('settings.password');
    });

    // Anything else under /admin — styled 404, not the framework default.
    // An explicit wildcard (not Route::fallback(), whose behavior inside a
    // prefixed group isn't something to gamble with site-wide 404s over)
    // matched only when nothing above it already matched.
    Route::middleware('admin.auth')->get('/{any}', function () {
        return response()->view('admin.404', [], 404);
    })->where('any', '.*');
});