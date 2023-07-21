<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use App\Models\ScheduleTime;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\ScheduleAdmin;


class ScheduleController extends Controller
{
   public function index()
   {
   $schedules = Schedule::all();
   return view("schedule", compact('schedules'));
   } 

   public function create(Request $request)
   {
       $validatedData = $request->validate([
           'date' => 'required|date',
           'start_time' => 'required|date_format:H:i',
       ]);
      // Add 45 minutes to the start time to calculate the end time
         $startTime = Carbon::createFromFormat('H:i', $validatedData['start_time']);
         $endTime = $startTime->addMinutes(45)->format('H:i');

         // Set the end time in the validated data
         $validatedData['end_time'] = $endTime;

         $schedule = Schedule::create($validatedData);

         // Respond with a JSON success message for AJAX response
         if ($schedule) {
            return response()->json(['success' => true]);
         } else {
            return response()->json(['success' => false]);  
         }
   }

         public function update(Request $request, $id)
         {
           $validatedData = $request->validate([
               'date' => 'required|date',
               'start_time' => 'required|date_format:H:i',
           ]);
       
           $schedule = Schedule::findOrFail($id);
       
           // Add 45 minutes to the start time to calculate the end time
           $startTime = Carbon::createFromFormat('H:i', $validatedData['start_time']);
           $endTime = $startTime->addMinutes(45)->format('H:i');
       
           // Set the end time in the validated data
           $validatedData['end_time'] = $endTime;
       
           $schedule->update($validatedData);
       
           return response()->json(['message' => 'Schedule updated successfully']);
         }

   public function thankyou()
         {
            return view('thankyou');
         }

   public function notification()
         {
            return view('notification');
         }
      }

      
