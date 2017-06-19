<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use URL;
use \App\Mileage;

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

        $mileage->travelers_id =  Session::get('id');
        $mileage->save();
        return redirect('mileage/show/' . $mileage->id);

    }

    public function show($id) {

        echo $id;
        $mileage = Mileage::find($id);
        dd($mileage);

    }
}
