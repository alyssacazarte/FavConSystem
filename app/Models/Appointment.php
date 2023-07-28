<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
    use HasFactory;
    // protected $table = 'appointments';
    public $timestamps = false;

    protected $fillable = [
        'request_id',
        'service_id',
        'name',
        'date',
        'start_time',
        'end_time',
        'email',
        'address',
        'phone_number',
        'notes',
    ];

    public function request(){
        return $this->belongsTo(Request::class);
    }
}
