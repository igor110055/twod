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
Route::get('/',function(){
    return view("landing");
});

Route::get("/bet-lists",[App\Http\Controllers\BetListController::class,'index']);
Route::get("/number-lists",[App\Http\Controllers\NumberListController::class,'index']);
Route::get("/users",[App\Http\Controllers\UserController::class,'index']);
Route::get("/users/{id}",[App\Http\Controllers\UserController::class,'show'])->name("users.show");

Route::get("/twodhistory",[App\Http\Controllers\TwodHistoryController::class,'index']);
Route::get("/dashboard",[App\Http\Controllers\DashboardController::class,'index']);
