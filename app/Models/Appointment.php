<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
    use Notifiable;
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
