<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    // protected $table = 'appointments';
    
    protected $fillable = [
        'request_id',
        'service_id',
        'name',
        'date',
        'start-time',
        'email',
        'address',
        'phone_no',
        'notes',
    ];
}
