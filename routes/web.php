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

Route::get('/index', function () {
	alert()->success('SuccessAlert','Reservation done');
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
/*Route::get('/rooms', function () {
    return view('rooms');
});*/
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/admins', function () {
    return view('admins');
});

Route::post('/loginme', "loginsController@login");

Route::resource('/rooms', "BachelorController");
Route::resource('/rooms', "FamilyController");


