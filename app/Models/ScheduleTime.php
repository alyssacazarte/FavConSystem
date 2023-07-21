<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ScheduleTime extends Model
{
    use Notifiable;
    // protected $table = 'appointments';
    public $timestamps = false;
    protected $fillable = [
        'schedule_id',
        'start_time',
        'end_time',
    ];
    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }
   
}
