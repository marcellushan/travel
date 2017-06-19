@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Welcome to Georgia Highlands Travel Website</h1>
    <form action="{{URL::to('/')}}/mileage/origination" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <h2>Departure Location</h2>
        <input type="radio" name="origination"  value="1"> Home</br>
      <input type="radio" name="origination"  value="0"> Campus

        <h2>Returning Location</h2>
        <input type="radio" name="termination" value="1"> Home</br>
        <input type="radio" name="termination"  value="0"> Campus


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