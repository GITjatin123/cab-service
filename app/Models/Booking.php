<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'start_dest',
        'end_dest',
        'ride_date',
        'ride_time',
    ];
}
