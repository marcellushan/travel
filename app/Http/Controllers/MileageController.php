<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use URL;
use \App\Mileage;
use \App\Traveler;

use Session;

class MileageController extends Controller
{

    public function create()
    {

        return view('mileage.from_home');
    }

    public function origination(Request $request)
    {
//       dd($request->all());
        $origination = $request->origination;
        $termination = $request->termination;
//        dd($data);
//        $data->return;
        return view('mileage.load_images')->with(compact('origination','termination'));

    }

    public function store(Request $request)
    {
        $mileage = new Mileage();
        $mileage->fill($request->all());
//        dd($mileage);
        if($request->file('commute_map')) {
            $file = $request->file('commute_map');
            //Move Uploaded File
            $destinationPath = 'uploads';
            $myRandom = rand(1, 10000);
            $myPath = $myRandom . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $myPath);
            $service= URL::to('/') . "/uploads/" . $myPath;
            $mileage->commute_map = $service;
        }

        if($request->file('home_to_destination_map')) {
            $file = $request->file('home_to_destination_map');
            //Move Uploaded File
            $destinationPath = 'uploads';
            $myRandom = rand(1, 10000);
            $myPath = $myRandom . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $myPath);
            $service= URL::to('/') . "/uploads/" . $myPath;
            $mileage->home_to_destination_map = $service;
        }

        if($request->file('campus_to_destination_map')) {
            $file = $request->file('campus_to_destination_map');
            //Move Uploaded File
            $destinationPath = 'uploads';
            $myRandom = rand(1, 10000);
            $myPath = $myRandom . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $myPath);
            $service= URL::to('/') . "/uploads/" . $myPath;
            $mileage->campus_to_destination_map = $service;
        }

        $mileage->traveler_id =  Session::get('id');
        $mileage->save();
        return redirect('mileage/show/');

    }

    public function show() {

        $data = Traveler::find(Session::get('id'));
        $mileage = $data->mileage;
        dd($mileage->tier_1);
        if(! $mileage->rental_rate && $mileage->roundtripmileage >= 200)
            return redirect('mileage/comparison/' . $mileage->id);
        return view('mileage.show')->with(compact('data','mileage'));

    }

    public function comparison($id) {

        return view('mileage.comparison')->with(compact('id'));

    }

    public function updateRental(Request $request)
    {
        $data = Mileage::find($request->id);
        $data->rental_rate = $request->rental_rate;
        $data->save();
        return redirect('mileage/show/');
    }
}
