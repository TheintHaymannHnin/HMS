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
    return view('ui.landing');
});

Route::get('/dashboard', function () {
    return view('admin.master');
 });

Route::resource('/posts','App\Http\Controllers\PostController');

Route::resource('/users','App\Http\Controllers\UserController');
Route::resource('/room_types','App\Http\Controllers\Room_typeController');
Route::resource('/rooms','App\Http\Controllers\RoomController');
Route::get('/showrooms','App\Http\Controllers\ShowroomController@showroom');
