<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    protected $fillable = ['first_name', 'last_name','departure_date','departure_time','city','state','high','return_date','return_time'];


    public function mileage()
    {
        return $this->hasOne('App\Mileage');
    }

    public function meals()
    {
        return $this->hasMany('App\Meal');
    }


}
