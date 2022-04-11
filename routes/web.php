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

Route::get('/X', function () {
    return view('index');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/products','PageController@products');




Route::get('/','PageController@index');
Route::get('/contact_us','PageController@contacts_us');
Route::get('/about-us','PageController@about_us');



//solutions
Route::get('/solutions','PageController@solutions');
Route::get('/software-solutions','PageController@software_solutions');
Route::get('/hardware-solutions','PageController@hardware_solutions');
Route::get('/it-solutions','PageController@it_solutions');
Route::get('/mobile-solutions','PageController@mobile_solutions');