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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/find', 'UserController@findfriends')->middleware('auth');
Route::get('/showuser/{id}', 'UserController@showuser')->middleware('auth');
Route::get('/status/{id}', 'FriendController@getstatus');