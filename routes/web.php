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



Route::get('mileage/create', 'MileageController@create');
Route::get('mileage/show', 'MileageController@show');
Route::get('mileage/comparison/{id}', 'MileageController@comparison');
Route::post('mileage/origination', 'MileageController@origination');
Route::post('mileage/store', 'MileageController@store');
Route::post('mileage/update_rental', 'MileageController@updateRental');

Route::resource('traveler', 'TravelersController');


