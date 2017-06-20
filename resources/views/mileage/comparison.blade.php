@extends('layouts.app') @section('content')
    <div class="main container">
        <h3>Most economical means of travel should be used based on decision from comparison of airfare vs. driving
            personal vehicle vs. driving a rental car by using <a href="http://ssl.doas.state.ga.us/vehcostcomp/" target="_blank" > Vehicle Cost Comparison.</a></h3>

       <form action="{{URL::to('/')}}/mileage/update_rental" method="post">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <input type="hidden" name="id" value="{{$id}}">

        <h2>Enter Rental Car costs  <input type="text" name="rental_rate"></h2>
        <input type="submit" name="Submit">

        </form>

        </div>

@endsection