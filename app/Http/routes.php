<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Authentication routes
date_default_timezone_set('Europe/Amsterdam');

Route::get('auth/login', ['as' => 'login', 'uses' =>'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as'=>'logout', 'uses' => 'Auth\AuthController@getLogout']);
# Dashboard
Route::resource('dashboard', 'DashController');
Route::resource('travelrequest', 'TravelrequestController');


#Request
Route::get('aanvraag', ['as' => 'aanvraag', 'uses' => 'TravelrequestController@create']);
route::post('aanvraag/save', ['uses'=> 'TravelrequestController@store']);

#Customer
Route::resource('customer', 'CustomerController');

#BookingDetails
Route::resource('customer.flight', 'FlightController');
Route::resource('booking.passenger', 'PassengerController');
Route::resource('booking.flight.outbound', 'OutboundController');
//Route::resource('booking.cost', 'CostController');


Route::get('/', function () {
	return redirect()->action('DashController@index');
    return view('welcome');
});
