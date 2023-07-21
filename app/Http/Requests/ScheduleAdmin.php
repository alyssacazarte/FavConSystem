<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleAdmin extends FormRequest
{
    public function rules()
    {
        return [
            'schedule_id' => 'required|exists: schedules,id',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i', 
        ];
    }
}
