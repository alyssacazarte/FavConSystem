<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Schedule;
use App\Models\Appointment;
use App\Http\Request\BookingRequest;

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
        $schedules = Schedule::with('scheduleTime')->get();

        return view('contact', compact('services', 'schedules'));
    }
    public function book(BookingRequest $request)
    {
        // dd($request);
        // Validate user input
        // $validatedData = $request->validate([
        //     'service_id' => 'required|exists:services,service_id',
        //     'schedule_id' => 'required|exists:schedules,schedule_id',
        //     'date' => 'required|date',
        //     'start_time' => 'required|date_format:H:i',
        //     'end_time' => 'required|date_format:H:i',
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'address' => 'required|string',
        //     'phone_no' => 'required|numeric',
        //     'notes' => 'nullable|string',
        // ]);

        // Create appointment
        $user = Appointment::create($validatedData->validated());

        if ($user) {
            
            return redirect()->route('contact.thankyou');
        } 

        return redirect()->route('contact.index');
        // Redirect to thank you page or show success message
    }

    public function thankyou()
    {
        return view('thankyou');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
}
