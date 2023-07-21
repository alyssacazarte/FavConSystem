<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Schedule extends Model
{
    use Notifiable;
    // protected $table = 'appointments';
    public $timestamps = false;
    
    protected $fillable = [
        'date',
        'start_time',
        'end_time',

    ];
    public function scheduleTimes(){
        return $this->hasMany(ScheduleTime::class);
    }
}

