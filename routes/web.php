<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/book', [ContactController::class, 'book'])->name('contact.book');
Route::post('/get-available-times', [ContactController::class, 'getAvailableTimes'])->name('getAvailableTimes');


