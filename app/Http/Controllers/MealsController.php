<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Meal;
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
//                dd($request->except('_token'));
        $data = $request->except('_token');
//        foreach ($data as $stuff) {
//            if( is_array( $stuff ) ) {
//                foreach( $stuff as $thing ) {
//                    dd($stuff);
//                }
//            } else {
//                echo $stuff;
//            }
//        }

        foreach ($data as $my_date => $meals) {
            $meals_data = new Meal();
            foreach ($meals as $meal_type){
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
        dd($meals_data);

//            echo $item;
//
//        }
//        $meals = new Meal();
//        $meals->date = '2017-06-17';
//        $meals->breakfast = 1;
//        $meals->lunch = 0;
//        $meals->dinner = 1;
//        $meals->save();
//        dd($_POST);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
