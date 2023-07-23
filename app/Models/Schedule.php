<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Schedule extends Model
{
    use HasFactory;
    // protected $table = 'appointments';
    public $timestamps = false;

    protected $fillable = [
        'date',
        'status',
        // 'timeslot_id'
    ];

    public function scheduleTimes(){
        return $this->hasMany(ScheduleTime::class);
    }

    public function service(){
        return $this->hasOne(Service::class);
    }

    public function timeslot(){
        return $this->hasMany(Timeslot::class, 'schedule_id', 'id');
    }
}

