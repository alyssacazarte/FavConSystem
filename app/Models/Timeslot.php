<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'start_time',
        'end_time',
        'status',
        'schedule_id'
    ];

    public function timeslot() {
        return $this->belongsTo('App/Models/Service');
    }

    public function timeslots() {
        return $this->hasMany(Timeslot::class);
    }
}
