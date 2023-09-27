<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Schedule;
// use App\Models\Request as Requests;
use App\Models\Appointment;
use App\Http\Requests\BookingRequest;
use App\Mail\NewAppointmentNotification;
use Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('status', 'Active')
                           ->whereHas('schedule', function ($query) {
                                $query->where('status', 'Available');
                           })->get();
                           
        return view('contact', compact('services'));
    }

    public function book(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('contact.index')->with('invalid-email-notification');
        }

        $newAppointment = Appointment::create($request->all());
    
        if ($newAppointment) {
            $adminEmail = 'leenunuyaa@gmail.com';
            Mail::to($adminEmail)->send(new NewAppointmentNotification($newAppointment));
    
            return redirect()->route('contact.index')->with('success');
        }
    
        return redirect()->route('contact.index')->with('error');
    }
    
    public function getSchedule(Request $request)
    {
        $data = $request->all();
    
        $schedule = Schedule::where('service_id', $data['schedule_id'])
                            ->where('status', 'Available')
                            ->with(['timeslot' => function ($query) {
                                $query->where('status', 'Available');
                            }])
                            ->get();
    
        return response()->json($schedule);
    }
}
