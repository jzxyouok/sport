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

Route::get('/', function () {
    return view('welcome');
});

//test
Route::get('/test', function () {
    return view('layouts.test');
});
Route::get('/activity', function () {
    return view('activity.order');
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