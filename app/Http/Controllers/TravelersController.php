<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Traveler;
use \App\State;

use Session;

class TravelersController extends Controller
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
        $states = State::get();
        return view('traveler.create')->with(compact('states'));
//        return view('mileage.show')->with(compact('data','mileage'));


        dd($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $traveler = new Traveler($data);
        $traveler->fill($data);
        $traveler->departure_time = implode(":", $request->departure_time);
        $traveler->return_time = implode(":", $request->return_time);
//        dd($traveler);
        if($traveler->state <> 'GA')
            return view('traveler.out_of_state');
        $traveler->save();
        Session::put('id',$traveler->id);
        return redirect('mileage/create');
        return redirect('traveler/' . $traveler->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Traveler::find($id);
        $data->days = (strtotime($data->return_date) - strtotime($data->departure_date)) / 86400;
        $my_date = new \DateTime($data->departure_date);
        $my_date->modify('-1 day');
//
//        $date->modify('+1 day');
//        echo $date->format('Y-m-d') . "\n";
        return view('traveler.meals')->with(compact('data','my_date'));
//        echo $data->return_date;
//        echo date_format(date_create($data->return_date + 1), 'F d Y');
//        dd($data);
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
