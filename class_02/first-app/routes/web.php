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
    return view('home');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/page', function () {
    return view('page');
});
