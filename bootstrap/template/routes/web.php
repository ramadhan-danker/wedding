<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ud1', function () {
    return view('ud1');
});


Route::get('/ud2', function () {
    return view('ud2');
});

Route::get('/ud3', function () {
    return view('ud3');
});

Route::get('/ud4', function () {
    return view('ud4');
});

Route::get('/ud5', function () {
    return view('ud5');
});

Route::get('/ud6', function () {
    return view('ud6');
});

Route::get('/ud7', function () {
    return view('ud7');
});

Route::get('/ud8', function () {
    return view('ud8');
});

Route::get('/ud9', function () {
    return view('ud9');
});

Route::get('/ud10', function () {
    return view('ud10');
});
