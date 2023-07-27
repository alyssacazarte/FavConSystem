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
        'status'
    ];
    public function schedule() {
        return $this->belongsTo(Timeslot::class);
    }
}

