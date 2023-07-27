<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'type',
        'description',
        'duration',
        'timeslot_id',
        'status'
    ];

    public function services(){
        return $this->hasMany(Timeslot::class, 'timeslot_id');
    }

}
