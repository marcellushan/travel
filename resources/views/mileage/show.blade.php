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
                <h2>Roundtrip Destination Mileage:  {{$mileage->roundtripmileage}}</h2>
                @if($mileage->commute)
                    <h2>Commute Mileage: {{($mileage->commute)}}</h2>
                @endif
                @if($mileage->rental_rate)
                    <h2>Cost Comparison: ${{number_format($mileage->rental_rate,2)}}</h2>
                @endif
            </div>
            <div class="col-md-6">
                <h2>Computation:</h2>
                @if($mileage->commute)
                    <h3>Reimbursable Mileage {{$mileage->roundtripmileage}} - {{$mileage->commute}}  =  {{$mileage->roundtripmileage-$mileage->commute}} </h3>
                @else
                    <h3>Reimbursable Mileage {{$mileage->roundtripmileage}}</h3>
                @endif
                {{--<h4>{{$data->destination_mileage}}--}}

                        {{--- {{$data->commute_miles}} = {{$data->destination_mileage - $data->commute_miles}}--}}

                {{--</h4>--}}
                <h2>Reimbursement:</h2>
                @if($mileage->rental_rate > ($mileage->roundtripmileage-$mileage->commute) * .535)
                    <h1>Tier 1 : {{$mileage->roundtripmileage-$mileage->commute}} * 0.535 = ${{number_format(($mileage->roundtripmileage-$mileage->commute) * .535, 2)}}</h1>
                @else
                    <h1>Tier 2 : {{$mileage->roundtripmileage-$mileage->commute}} * 0.170 = ${{number_format(($mileage->roundtripmileage-$mileage->commute) * .17,2)}}</h1>
                @endif
            </div>
        </div>
        <div class="row">
            @if($mileage->campus_to_destination_map)
                <div class="col-md-4">
                    <h2>Campus to Destination Map</h2>
                    <a href="{{$mileage->campus_to_destination_map}}" target="_blank" ><img src="{{$mileage->campus_to_destination_map}}" height="300px" width="300px" ></a>
                </div>
            @endif
            @if($mileage->commute_map)
                <div class="col-md-4">
                    <h2>Commute Map</h2>
                    <a href="{{$mileage->commute_map}}" target="_blank" ><img src="{{$mileage->commute_map}}" height="300px" width="300px" ></a>
                </div>
            @endif
                @if($mileage->home_to_destination_map)
                <div class="col-md-4">
                    <h2>Home to Destination Map</h2>
                    <a href="{{$mileage->home_to_destination_map}}" target="_blank"><img src="{{$mileage->home_to_destination_map}}" height="300px" width="300px" ></a>
                </div>
                @endif
        </div>

@endsection