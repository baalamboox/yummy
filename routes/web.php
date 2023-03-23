<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RatingsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/send_rate', [RatingsController::class, 'create_rate'])->name('send_rate');
