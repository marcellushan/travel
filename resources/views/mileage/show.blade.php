@extends('layouts.app') @section('content')
    <div class="main container">
        <h2>Destination:  {{$data->destination}}</h2>
        <div class="row">
            <div class="col-md-6">
                <h2>Departure</h2>
                <h2>Date    {{date_format(date_create($data->departure_date), 'F d Y')}}
                Time  {{$data->departure_time}}</h2>
            </div>
            <div class="col-md-6">
                <h2>Return</h2>
                <h2>Date    {{date_format(date_create($data->return_date), 'F d Y')}}
                    Time  {{$data->return_time}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Roundtrip Destination Mileage:  {{$data->destination_mileage}}</h2>
                @if($data->commute)
                    <h2>Commute Mileage:  {{($data->depart ? "Depart " . $data->commute_mileage: '')}}{{($data->return ? " Return " . $data->commute_mileage: '')}}</h2>
                @endif
                @if($data->rental_cost)
                    <h2>Cost Comparison: ${{number_format($data->rental_cost,2)}}</h2>
                @endif
            </div>
            <div class="col-md-6">
                <h2>Computation:</h2>
                <h4>Destination Mileage {{$data->commute}}= Reimbursable Mileage</h4>
                <h4>{{$data->destination_mileage}}
                    @if($data->commute)
                        - {{$data->commute_miles}} = {{$data->destination_mileage - $data->commute_miles}}
                    @endif
                </h4>
                <h2>Reimbursement:</h2>
                <h4>Reimbursable Mileage * Reimbursement Rate</h4>
                <h1>{{$data->destination_mileage - $data->commute_miles}} * {{$data->rate}} = ${{$data->mileage}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Destination Map</h2>
                <img src="{{$data->destination_image}}" height="300px" width="300px" >
            </div>
            @if($data->commute)
            <div class="col-md-6">
                <h2>Commute Map</h2>
                <img src="{{$data->commute_image}}" height="300px" width="300px" >
            </div>
                @endif
        </div>

@endsection