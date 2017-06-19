@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Welcome to Georgia Highlands Travel Website</h1>
    <form action="{{URL::to('/')}}/traveler" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
        <div class="col-md-3 col-md-offset-3">
            <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control" name="first_name">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control" name="last_name">
            </div>
        </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-3">
            <div class="form-group">
                <label>Departure Date</label>
                <input type="Date" class="form-control" name="departure_date">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Departure Time</label><br>
                @include('partials.depart_time')
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label>Destination</label>
                <input type="text" class="form-control" name="destination">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-md-offset-3">
            <div class="form-group">
                <label>Return Date</label>
                <input type="Date" class="form-control" name="return_date">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Return Time</label><br>
                @include('partials.return_time')
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-6">
            <div class="form-group">
                <input type="submit" class="btn-default btn-lg">
            </div>
        </div>
    </div>

</form>
</div>
@endsection