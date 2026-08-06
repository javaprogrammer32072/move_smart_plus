<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;

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
Route::get("/contact-us",[HomeController::class,'contactUs']);
Route::get("/services",[HomeController::class,'services']);
Route::post('/contact', [ContactController::class, 'store']) ->name('contact.store');


// Route::get('/', [BookingController::class, 'index'])->name('home');

Route::post('/booking/store',[BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/{booking}/inventory',[BookingController::class, 'inventory'])->name('booking.inventory');
Route::post('/booking/{booking}/inventory', [BookingController::class, 'saveInventory'])->name('booking.inventory.store');

Route::get('/booking/{booking}/success',[BookingController::class,'success'])->name('booking.success');
Route::get('/services/home-shifting',[HomeController::class,'homeShifting']);