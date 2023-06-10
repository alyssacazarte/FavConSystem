<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'start_time',
        'status'

    ];
    public function appointment(){
        return $this->hasOne(Appointment::class);
    }
}
