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
//Route::resource('pharmacist','pharmacistController');
Route::resource('request','requestsController');
Route::resource('duration','durationsController');
Route::resource('phsales','phsalesController');
Route::resource('store','storesController');
Route::resource('sales','salesController');
Route::resource('pharmacy','pharmacyController');
Route::get('/search','pharmacyController@search');
Route::resource('daterange','DateRangeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('users/logout','Auth\LoginController@userLogout')->name('users.logout');
Route::prefix('pharmacist')->group(function(){
Route::get('/login','Auth\pharmacistLoginController@showLoginForm')->name('pharmacist.login');
Route::post('/login','Auth\pharmacistLoginController@login')->name('pharmacist.login.submit');
Route::get('/', 'pharmacistController@index')->name('pharmacist.dashboard');
Route::any('/logout','Auth\pharmacistLoginController@logout')->name('pharmacist.logout');
});
Route::prefix('admin')->group(function(){
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::any('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
});