<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return view('welcome');
});

////////////////////////////////////////////////////////////////////
route::get('/videos', function () {
    return view('videos');
});
Route::view('/videos', 'videos');
/////////////////////////////////////////////////////////////////////
Route::get('/multimedia', function () {
    return view('multimedia');
});
/////////////////////////////////////////////////////////////////////
Route::get('/tablas', function () {
    return view('tablas');
});
////////////////////////////////////////////////////////////////////
Route::get('/multimedia', [VideoController::class, 'index']);
Route::post('/multimedia', [VideoController::class, 'store']);