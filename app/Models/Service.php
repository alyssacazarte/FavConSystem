<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{   
    protected $fillable = [
        'service_type',
        'service_description',
        'service_duration',
    ];

}
