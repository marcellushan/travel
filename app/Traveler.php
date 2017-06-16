<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    protected $fillable = ['first_name', 'last_name','departure_date','destination','return_date'];
}
