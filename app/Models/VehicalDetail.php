<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicalDetail extends Model
{
   protected $fillable=[
     'vehicle_name',
       'vehicle_capacity',
       'vehicle_type',
       'vehicle_image',
       'model',
       'brand',
       'status',
       'price_km',

   ];
}
