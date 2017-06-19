<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('mileage/create', 'MileageController@create');
Route::get('mileage/show/{id}', 'MileageController@show');
Route::post('mileage/origination', 'MileageController@origination');
Route::post('mileage/store', 'MileageController@store');

Route::resource('traveler', 'TravelersController');


