<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/news', function () {
    return view('news');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/dealers', function () {
    return view('dealers');
});

Route::get('/storages', function () {
    return view('storages');
});

Route::get('/delivery', function () {
    return view('delivery');
});
