<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
public function boot()
{
    Validator::extend('not_in_past_month', function ($attribute, $value, $parameters, $validator) {
       
        $selectedDate = new \DateTime($value);


        // Get the first day of the current month
        $firstDayOfCurrentMonth = new \DateTime('first day of this month');


        // Get the last day of the current month
        $lastDayOfCurrentMonth = new \DateTime('last day of this month');


        // Check if the selected date is within the current month
        return $selectedDate >= $firstDayOfCurrentMonth && $selectedDate <= $lastDayOfCurrentMonth;

    });
}


    
}
