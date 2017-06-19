<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mileage extends Model
{
    protected $fillable = ['origination', 'termination','commute_miles','home_to_destination_miles','campus_to_destination_miles'];
}
