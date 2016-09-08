<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'BloodBankController@index');

Route::get('BloodBank', 'BloodBankController@index');
Route::get('blood_bank/Registration', 'RegisterController@index');
Route::get('blood_bank/OutRequest', 'OutPatientRequestController@out_request');
Route::get('blood_bank/InRequest', 'InPatientRequestController@in_request');
Route::get('blood_bank/Search', 'PatientController@search');
Route::post('blood_bank/InRequest', 'PatientController@search');
Route::post('blood_bank/Registration', 'PatientRequestController@store');