@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Welcome to Georgia Highlands Travel Website</h1>
    <form action="{{URL::to('/')}}/trips/{{$data->id}}" method="post">
        <input type="hidden" name="_method" value="put" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <h2>Departure Location</h2>
        <input type="radio" name="depart"  value="1"> Home</br>
      <input type="radio" name="depart"  value="0"> Campus

        <h2>Returning Location</h2>
        <input type="radio" name="return" value="1"> Home</br>
        <input type="radio" name="return"  value="0"> Campus


<div class="row">
    <div class="col-md-3 col-md-offset-5">
        <div class="form-group">
            <input type="submit" class="btn-default btn-lg">
        </div>
    </div>
</div>


</form>
</div>
@endsection