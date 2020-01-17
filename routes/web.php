<?php

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

Auth::routes();
Route::get('/login/hotel', 'Auth\LoginController@showHotelLoginForm');
Route::get('/login/user', 'Auth\LoginController@showUserLoginForm');
Route::get('/register/hotel', 'Auth\RegisterController@showHotelRegisterForm');
Route::get('/register/user', 'Auth\RegisterController@showUserRegisterForm');

Route::post('/login/hotel', 'Auth\LoginController@hotelLogin');
Route::post('/login/user', 'Auth\LoginController@userLogin');
Route::post('/register/hotel', 'Auth\RegisterController@createHotel');
Route::post('/register/user', 'Auth\RegisterController@createUser');

Route::view('/home', 'home')->middleware('auth');
Route::get('/hotel/{hotel}', 'ProfileHotelController@indexHotel')->name('hotel.show');
Route::get('/user/{user}', 'ProfileUserController@indexUser')->name('user.show');

