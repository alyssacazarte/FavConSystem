<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Request as Requests;
use App\Notifications\ConfirmationEmail;

class RequestController extends Controller
{
    public function index(){
        $requests = Requests::get();

        return view("form", compact('requests'));
    }

    public function updateStatus(Request $request, Requests $req)
    {
        $message = $request->all()["status"];
        $user = $req->appointment;

        $user->notify(new ConfirmationEmail($message));

        $req->update($request->all());

        return redirect()->back();
    }
}
