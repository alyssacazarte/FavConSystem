<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function appointmentview() {
        return view ('layout.admin.appointment');
    }
    public function scheduleview() {
        return view ('layout.admin.schedule');
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
