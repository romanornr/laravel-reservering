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
Route::get('auth/login', ['as' => 'login', 'uses' =>'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as'=>'logout', 'uses' => 'Auth\AuthController@getLogout']);
# Dashboard
Route::get('dashboard', ['as' => 'dashboard', 'uses' =>'DashController@show']);
//Route::resource('dashboard/klanten', 'KlantController');
//Route::resource('dashboard/klanten.booking', 'BookingController');
# klant
//Route::get('aanvraag', ['as' => 'aanvraag', 'uses' => 'TravelrequestController@create']);
//route::post('aanvraag/save', ['uses'=> 'TravelrequestController@store']);

#customer
//grab specific customer by id
//Route::get('customer/{customer}', function(App\Customer $customer) {
//	return $customer;
//});
Route::get('customer', ['as' => 'customer', 'uses' =>'CustomerController@show']);
Route::resource('customer', 'CustomerController');


Route::get('/', function () {
    return view('welcome');
});
