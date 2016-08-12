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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//test
Route::get('/test', function () {
    return view('layouts.test');
});
Route::get('/activity/detail', function () {
    return view('activity.detail');
});
Route::get('/activity/list', function () {
    return view('activity.list');
});
Route::get('/coach/detail', function () {
    return view('coach.detail');
});
Route::get('/coach/list', function () {
    return view('coach.list');
});
Route::get('/coach/order', function () {
    return view('coach.order');
});
Route::get('/personal/information', function () {
    return view('personal.information');
});
Route::get('/personal/order-detail', function () {
    return view('personal.order-detail');
});
Route::get('/personal/order-list', function () {
    return view('personal.order-list');
});
Route::get('/stadium/detail', function () {
    return view('stadium.detail');
});
Route::get('/stadium/list', function () {
    return view('stadium.list');
});
Route::get('/stadium/order', function () {
    return view('stadium.order');
});
//test