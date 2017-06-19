@extends('layouts.app') @section('content')
    {!! Form::open(['url' => 'mileage/store', 'files' => true])!!}
    {!! Form::hidden('origination', ['value' => $origination]) !!}
    {!! Form::hidden('termination', ['value' => $termination]) !!}

    @if($origination || $termination)
    <h3>Please enter your Commute miles</h3>
    {!! Form::text('commute_miles') !!}<br>
    @include('partials.file_upload', ['image_type' => 'commute_map', 'image_text' => ' a copy of your Commute map'])
    <h3>Please enter your Home to Destination miles</h3>
    {!! Form::text('home_to_destination_miles') !!}<br>
    @include('partials.file_upload', ['image_type' => 'home_to_destination_map', 'image_text' => ' a copy of your Home to Destination map'])
    @endif

    @if((! $origination || ! $termination))
        <h3>Please enter your Campus to Destination miles</h3>
        {!! Form::text('campus_to_destination_miles') !!}<br>

        @include('partials.file_upload', ['image_type' => 'campus_to_destination_map', 'image_text' => ' a copy of your Campus to Destination map'])
    @endif

    {!! Form::submit('submit') !!}

@endsection