<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class LocalizationController extends Controller
{
    public function setLocale($locale)
    {
        if (in_array($locale, ['en', 'es'])) {
            App::setLocale($locale);
        }
        
        return Redirect::back(); // Redirect back to the previous page
    }

}
