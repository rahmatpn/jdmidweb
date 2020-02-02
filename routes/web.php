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

Route::get('jobvacancy',function (){
    return view('jobvacancy');
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

Route::get('/home', 'HomeController@index');

Route::get('/hotel/{hotel}', 'ProfileHotelController@indexHotel')->name('hotel.show');
Route::get('/hotel/{hotel}/edit', 'ProfileHotelController@edit')->name('hotel.edit');
Route::patch('/hotel/{hotel}', 'ProfileHotelController@update')->name('hotel.update');
Route::get('/hotel/{hotel}', 'ProfileHotelController@indexHotel')->name('hotel.show');
Route::get('/user/{user}', 'ProfileUserController@indexUser')->name('user.show');




Route::group([
    'middleware'=>'auth:user'
], function (){
    Route::get('/user/{user}/edit', 'ProfileUserController@edit');
    Route::patch('/user/{user}', 'ProfileUserController@update');
});

Route::group([
    'middleware'=>'auth:hotel'
], function (){
    Route::get('/job/postjob', 'PekerjaanController@create');
    Route::post('/job', 'PekerjaanController@store');
    Route::get('/job/{pekerjaan}', 'PekerjaanController@show');
    Route::get('/job/edit/{id}','PekerjaanController@edit');
    Route::post('/job/update','PekerjaanController@update');
    Route::get('/job/delete/{id}','PekerjaanController@delete');
    Route::patch('/hotel/{hotel}', 'ProfileHotelController@update');
    Route::get('/hotel/{hotel}/edit', 'ProfileHotelController@edit');
});



