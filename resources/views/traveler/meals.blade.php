@extends('layouts.app') @section('content')
    {!! Form::open(['url' => 'meals']) !!}
<h2>Meal Provided</h2>
<table class="table table-responsive">
    <tr>
        <th>
            Date
        </th>
        <th>
            Breakfast
        </th>
        <th>
            Lunch
        </th>
        <th>
            Dinner
        </th>
    </tr>
    @for($i = 0; $i <= $data->days; $i++)
        <?php $my_date->modify('+1 day'); ?>
    <tr>
        <td>
            {{$my_date->format('Y-m-d')}}
        </td>
        <td>
             Yes {{Form::radio($my_date->format('Y-m-d') . '[' . $i . '][breakfast]', 1)}} No {{Form::radio($my_date->format('Y-m-d') . '[' . $i . '][breakfast]', 0)}}
        </td>
        <td>
            Yes {{Form::radio($my_date->format('Y-m-d') . '[' . $i . '][lunch]', 1)}} No {{Form::radio($my_date->format('Y-m-d') . '[' . $i . '][lunch]', 0)}}
        </td>
        <td>
            Yes {{Form::radio($my_date->format('Y-m-d') . '[' . $i . '][dinner]', 1)}} No {{Form::radio($my_date->format('Y-m-d') . '[' . $i . '][dinner]', 0)}}
        </td>
    </tr>
    @endfor
</table>
    {{Form::submit('Click Me!')}}
    {!! Form::close() !!}
@endsection