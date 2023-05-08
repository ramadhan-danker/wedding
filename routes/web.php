<?php

use App\Http\Controllers\Wedding4Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingController;

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

Route::get('/a', function () {
    return view('undangan.undangan5');
});




Route::get('wedding1/{wedding1:slug}', [WeddingController::class, 'wedding1']);
Route::get('wedding2/{wedding2:slug}', [WeddingController::class, 'wedding2']);
Route::get('wedding3/{wedding3:slug}', [WeddingController::class, 'wedding3']);
Route::get('wedding4/{wedding4:slug}', [Wedding4Controller::class, 'wedding4']);
Route::get('wedding5/{wedding5:slug}', [WeddingController::class, 'wedding5']);
Route::get('wedding6/{wedding6:slug}', [WeddingController::class, 'wedding6']);
Route::get('wedding7/{wedding7:slug}', [WeddingController::class, 'wedding7']);
Route::get('wedding8/{wedding8:slug}', [WeddingController::class, 'wedding8']);
Route::get('wedding9/{wedding9:slug}', [WeddingController::class, 'wedding9']);
Route::get('wedding10/{wedding10:slug}', [WeddingController::class, 'wedding10']);
Route::get('wedding11/{wedding11:slug}', [WeddingController::class, 'wedding11']);
Route::get('wedding12/{wedding12:slug}', [WeddingController::class, 'wedding12']);
Route::get('wedding13/{wedding13:slug}', [WeddingController::class, 'wedding13']);





Route::get('/test', function () {
    return view('undangan.undangan12');
});