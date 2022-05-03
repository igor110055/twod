<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/v1/twodhistory', [App\Http\Controllers\TwodApiController::class, 'index']); //with apiKey //errorcode
Route::get('/v1/twodCreate', [App\Http\Controllers\TwodApiController::class, 'create']); //with apiKey //errorcode
