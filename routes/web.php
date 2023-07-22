<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CalendarController;
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
Route::get('/thankyou', [ContactController::class, 'thankyou'])->name('contact.thankyou');
Route::post('/update/{req}', [RequestController::class, 'updateStatus'])->name('request.form');
Route::get('/form', [RequestController::class, 'index'])->name('contact.form');
Route::get('/schedule', [ScheduleController::class, 'index']);
Route::post('/schedule/update/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
Route::post('/schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
Route::get('/schedule/thankyou', [ScheduleController::class, 'thankyou'])->name('schedule.thankyou');
Route::get('/success', [ScheduleController::class, 'notification'])->name('schedule.notification');


