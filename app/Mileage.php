<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mileage extends Model
{
//    const TIER_1 = .535;
//    const TIER_2 = .17;

    protected $fillable = ['origination', 'termination','commute_miles','home_to_destination_miles','campus_to_destination_miles'];




    public function getRoundTripMileageAttribute()
    {
        if($this->home_to_destination_miles && $this->campus_to_destination_miles)
            $round_trip_miles = $this->home_to_destination_miles + $this->campus_to_destination_miles;
        elseif ($this->home_to_destination_miles)
            $round_trip_miles = 2 * $this->home_to_destination_miles;
        else
            $round_trip_miles = 2 * $this->campus_to_destination_miles;
        return $round_trip_miles;
//        return number_format($round_trip_miles, 2);
    }

    public function getTier1Attribute()
    {
        if($this->home_to_destination_miles && $this->campus_to_destination_miles)
            $round_trip_miles = $this->home_to_destination_miles + $this->campus_to_destination_miles;
        elseif ($this->home_to_destination_miles)
            $round_trip_miles = 2 * $this->home_to_destination_miles;
        else
            $round_trip_miles = 2 * $this->campus_to_destination_miles;

        $commute_miles = 0;
        ($this->origination? $commute_miles = $commute_miles + $this->commute_miles :"");
        ($this->termination? $commute_miles = $commute_miles + $this->commute_miles :"");

        $tier_1 = ($round_trip_miles - $commute_miles) * .17;
        return $tier_1;
//        return number_format($round_trip_miles, 2);
    }

    public function getRateAttribute()
    {
        (! $this->rental_cost ? $rate = .535 :($this->destination_mileage * .535 < $this->rental_cost ? $rate = .535 : $rate = .17 ));
        return $rate;
    }

    public function getCommuteAttribute()
    {
//        ($this->return || $this->depart ? $commute = '- Commute Mileage ' : $commute = '');

        $commute_miles = 0;
        ($this->origination? $commute_miles = $commute_miles + $this->commute_miles :"");
        ($this->termination? $commute_miles = $commute_miles + $this->commute_miles :"");
         return $commute_miles;

    }

    public function getTestAttribute()
    {


            $test = $this->commute;
        return $test;

    }

    public function updateComparison(Request $request)
    {
        $this->update($request->all());
    }
}
