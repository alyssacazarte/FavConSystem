<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'service_id' => 'required|exists:services,service_id',
            'schedule_id' => 'required|exists:schedules,schedule_id',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone_no' => 'required|numeric',
            'notes' => 'nullable|string',
        ];
    }
}
