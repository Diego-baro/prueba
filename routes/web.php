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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', 'UserController');
Route::resource('rate', 'RateController');
Route::resource('report', 'ReportController');
Route::get('reportea/{idguest}/{idbook}','reportController@reporteA');
Route::get('reporteb/{idguest}/{idbook}','reportController@reporteB');
Route::get('reportec/{idguest}/{idbook}','reportController@reporteC');
Route::get('reported/{idguest}/{idbook}','reportController@reporteD');

Auth::routes();


