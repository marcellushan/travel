@extends('layouts.app') @section('content')
    <td class="main container">
        <table class="table table-responsive table-striped" width="80%">
            <tr align="right">
            <td>
                Date
            </td>
                <td>
                Breakfast
            </td>
                <td>
               Lunch
            </td>
                <td>
                Dinner
            </td>
                <td>
               Total
            </td>
            </tr>

        @foreach($meal_days as $meal_day)
        <tr align="right">
            <td>
                {{$meal_day->date}}
            </td>
            <td>
                ${{(number_format($meal_day->breakfast_rate,2))}}
           </td>
            <td>
                ${{(number_format($meal_day->lunch_rate,2))}}
            </td>
            <td>
                ${{(number_format($meal_day->dinner_rate,2))}}
            </td>
            <td>
                ${{(number_format(($meal_day->breakfast_rate + $meal_day->lunch_rate + $meal_day->dinner_rate),2))}}
           </td>
        </tr>
        @endforeach

        <tr  align="right">
            <td>

            </td>

            <td>
                ${{(number_format($breakfast_total ,2))}}
            </td>
            <td>
                ${{(number_format($lunch_total ,2))}}
            </td>
            <td>
                ${{(number_format($dinner_total ,2))}}
            </td>
            <td>
                ${{(number_format($grand_total ,2))}}
            </td>
        </tr>
        </table>

<a href
                           
@endsection