<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Schedule;
use App\Models\Request as Requests;
use App\Models\Appointment;
use App\Http\Requests\BookingRequest;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $schedules = Schedule::with('scheduleTimes')->get();

        return view('contact', compact('services', 'schedules'));
    }

    public function book(BookingRequest $request)
    {
        $req = Requests::create($request->validated());
        $req->appointment()->create($request->validated());

        if ($req) {
            return redirect()->route('contact.thankyou');
        } 

        return redirect()->route('contact.index');
    }

    public function thankyou()
    {
        return view('thankyou');
    }

   
   
}
