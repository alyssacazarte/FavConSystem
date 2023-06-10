<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    // protected $table = 'schedules';
    
    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'available',
    ];
    public function scheduleTime(){
        return $this->hasMany(ScheduleTime::class);
    }
}

