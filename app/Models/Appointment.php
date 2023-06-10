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
        'start_time',
        'email',
        'address',
        'phone_no',
        'notes',
    ];
    public function request(){
        return $this->belongsTo(Request::class);
    }
}
