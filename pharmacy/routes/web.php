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
use RealRashid\SweetAlert\Facades\Alert;
Route::get('/', function () {
    Alert::success('Well Done','Well Done You Did It');
    return view('welcome');
});
Route::resource('pharmacist','pharmacistsController');
Route::resource('request','requestsController');
Route::resource('duration','durationsController');
Route::resource('phsales','phsalesController');
Route::resource('store','storesController');
Route::resource('sales','salesController');
Route::resource('pharmacy','pharmacyController');
Route::get('/search','pharmacyController@search');
Route::resource('daterange','DateRangeController');
