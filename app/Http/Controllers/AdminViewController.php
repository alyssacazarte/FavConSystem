<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class AdminViewController extends Controller
{
    public function appointmentview() {
        return view ('layout.admin.appointment');
    }
    public function scheduleview() {
        $schedules  = Schedule::all();
        return view('layout.admin.schedule', compact('schedules'));
    }
    public function serviceview() {
        return view ('layout.admin.service');
    }
    public function timeslotview() {
        return view ('layout.admin.timeslot');
    }
    public function requestview() {
        return view ('layout.admin.request');
    }
}
