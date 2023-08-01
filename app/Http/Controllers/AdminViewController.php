<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Auth;

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

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            dd($credentials);
            return redirect('/');
        }
        return back()->withInput()->withErrors(['email' => 'Invalid login credentials']);
    }
}
