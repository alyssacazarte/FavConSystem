<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdvocacyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;

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
    return view('portfolio');
});

//Contact Route
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/book', [ContactController::class, 'book'])->name('contact.book');
Route::get('/thankyou', [ContactController::class, 'thankyou'])->name('contact.thankyou');

//Request Route
Route::post('/update/{req}', [RequestController::class, 'updateStatus'])->name('request.form');
Route::get('/form', [RequestController::class, 'index'])->name('contact.form');

//Schedule Route
Route::get('/schedule', [ScheduleController::class, 'index']);
Route::post('/schedule/update/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
Route::post('/schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
Route::get('/schedule/thankyou', [ScheduleController::class, 'thankyou'])->name('schedule.thankyou');
Route::get('/success', [ScheduleController::class, 'notification'])->name('schedule.notification');

//Portfolio Route
Route::get('/portfolio', [PortfolioController::class, 'index']);
//Advocacy Route
Route::get('/advocacy', [AdvocacyController::class, 'index']);
//About Route
Route::get('/about', [AboutController::class, 'index']);
 add/contact
//Contact Route


// Admin routes==================================================================
Route::get('/', [AdminController::class, 'admin']);
// services routes
Route::get('/admin/services', [AdminController::class, 'services']);
Route::get('/admin/services/create', [AdminController::class, 'createServices']);
Route::post('/admin/services/create/info', [AdminController::class, 'addServices']);
Route::get('/admin/services/update/{id}', [AdminController::class, 'editServices']);
Route::post('/admin/services/update/', [AdminController::class, 'updateServices']);
Route::get('/admin/services/delete', [AdminController::class, 'deleteServices']);
Route::get('/admin/services/delete/{id}', [AdminController::class, 'deleteServices']);
Route::get('/admin/services/view/{id}', [AdminController::class, 'specificServices']);
Route::get('/admin/services/view/', [AdminController::class, 'viewServices']);
main

// schedule routes
Route::get('/admin/schedule', [AdminController::class, 'schedule']);
Route::get('/admin/schedule/create', [AdminController::class, 'createSchedule']);
Route::post('/admin/schedule/create/info', [AdminController::class, 'addSchedule']);
Route::post('/admin/schedule/update', [AdminController::class, 'refreshSchedule']);
Route::get('/admin/schedule/update/{id}', [AdminController::class, 'updateSchedule']);

// requests routes
Route::get('/admin/requests', [AdminController::class, 'requests']);
Route::get('/admin/requests/approved', [AdminController::class, 'requests']);
Route::get('/admin/requests/rejected', [AdminController::class, 'requests']);
Route::get('/admin/requests/{id}', [AdminController::class, 'settingsRequests']);
Route::post('/admin/requests/', [AdminController::class, 'editSettingsRequests']);

//requests appointments
Route::get('/admin/appointments', [AdminController::class, 'appointments']);
