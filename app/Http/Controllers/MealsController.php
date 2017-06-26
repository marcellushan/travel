<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Meal;
use \App\Traveler;
use Session;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');


        foreach ($data as $my_date => $meals) {
            $meals_data = new Meal();
            foreach ($meals as $meal_type) {
                $meals_data->date = $my_date;
                $meals_data->traveler_id = Session::get('id');
                foreach ($meal_type as $key => $value) {
                    $meals_data->$key = $value;
//                    echo $value;
//                    echo "<br>";
                }

            }
            $meals_data->save();
        }
        return redirect('meals/' . Session::get('id') );

//        $traveler = Traveler::find(Session::get('id'));
//        if($traveler->high) {
//            $breakfast_rate = 7;
//            $lunch_rate = 9;
//            $dinner_rate = 20;
//        } else {
//            $breakfast_rate = 6;
//            $lunch_rate = 7;
//            $dinner_rate = 15;
//        }
//        $meal_days = $traveler->meals;
//        $meal_days_count = $meal_days->count();
//        $meal_day = 1;
//        foreach ($meal_days as $meal_day) {
//            $meal = Meal::find($meal_day->id);
//            if ($meal->breakfast)
//                ($i == 1 || $i == $meal_days_count ? $meal->breakfast_rate = $breakfast_rate * .75 : $meal->breakfast_rate = $breakfast_rate);
//            if ($meal->lunch)
//                ($i == 1 || $i == $meal_days_count ? $meal->lunch_rate = $lunch_rate *.75 : $meal->lunch_rate = $lunch_rate);
//            if ($meal->dinner)
//                ($i == 1 || $i == $meal_days_count ? $meal->dinner_rate = $dinner_rate * .75 : $meal->dinner_rate = $dinner_rate);
//            $meal->save();
//            $i++;
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $traveler = Traveler::find($id);
        $meal_days = $traveler->meals;
        if ($traveler->high) {
            $breakfast_rate = 7;
            $lunch_rate = 9;
            $dinner_rate = 20;
        } else {
            $breakfast_rate = 6;
            $lunch_rate = 7;
            $dinner_rate = 15;
        }
        $breakfast_total = 0;
        $lunch_total = 0;
        $dinner_total = 0;
//        $grand_total= 0;
        $meal_days_count = $meal_days->count();
        $day = 1;
        foreach ($meal_days as $meal_day) {
            $meal = Meal::find($meal_day->id);
            if ($meal->breakfast) {
                ($day == 1 || $day == $meal_days_count ? $meal_day->breakfast_rate = $breakfast_rate * .75 : $meal_day->breakfast_rate = $breakfast_rate);
                $breakfast_total = $breakfast_total + $meal_day->breakfast_rate;
            }
            if ($meal->lunch) {
                ($day == 1 || $day == $meal_days_count ? $meal_day->lunch_rate = $lunch_rate * .75 : $meal_day->lunch_rate = $lunch_rate);
                $lunch_total = $lunch_total + $meal_day->lunch_rate;
            }
            if ($meal->dinner) {
                ($day == 1 || $day == $meal_days_count ? $meal_day->dinner_rate = $dinner_rate * .75 : $meal_day->dinner_rate = $dinner_rate);
                $dinner_total = $dinner_total + $meal_day->dinner_rate;
            }
//            $meal->save();
            $day++;
        }

        $grand_total = $breakfast_total + $lunch_total + $dinner_total;
        return view('meals.show')->with(compact('meal_days','breakfast_total','lunch_total','dinner_total','grand_total'));
        dd($meal_days);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//    public function compute($id)
//    {
//        $data = Traveler::find($id);
//        $meal_days = $data->meals;
//        $meal_days_count = $meal_days->count();
//        $i = 1;
//        foreach ($meal_days as $meal_day) {
//            $meal = Meal::find($meal_day->id);
//            if($meal->breakfast)
//                ($i==1 || $i == $meal_days_count ? $meal->breakfast_rate = 5.25 : $meal->breakfast_rate = 7);
//            if($meal->lunch)
//                ($i==1 || $i == $meal_days_count ? $meal->lunch_rate = 6.75 : $meal->lunch_rate = 9);
//            if($meal->dinner)
//                ($i==1 || $i == $meal_days_count ? $meal->dinner_rate = 15 : $meal->dinner_rate = 20);
//            $meal->save();
//            $i++;
////            dd($meal->breakfast);
//
//        }
////        for ($i =0; $i < $meals; $i++)
////            dd($meals[$i]);
//
////        dd($meals);
//    }
}
