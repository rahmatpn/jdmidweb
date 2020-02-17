<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can masuk web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

Route::get('jobvacancy',function (){
    return view('jobvacancy');
});


Auth::routes();
Route::get('/login/hotel', 'Auth\LoginController@showHotelLoginForm');
Route::get('/login/user', 'Auth\LoginController@showUserLoginForm');
Route::get('/masuk/hotel', 'Auth\RegisterController@showHotelRegisterForm');
Route::get('/masuk/user', 'Auth\RegisterController@showUserRegisterForm');

Route::post('/login/hotel', 'Auth\LoginController@hotelLogin');
Route::post('/login/user', 'Auth\LoginController@userLogin');
Route::post('/masuk/hotel', 'Auth\RegisterController@createHotel');
Route::post('/masuk/user', 'Auth\RegisterController@createUser');
Route::get('/home', 'HomeController@index');
Route::get('/hotel/{profile}', 'ProfileHotelController@indexHotel')->name('hotel.show');
Route::get('/user/{profile}', 'ProfileUserController@indexUser')->name('user.show');


Route::group([
    'middleware'=>'auth:user'
], function (){
    Route::get('/user/{profileUser}/edit', 'ProfileUserController@edit');
    Route::patch('/user/{profileUser}', 'ProfileUserController@update');
    Route::post('/job/{url_slug}/apply', 'PekerjaanController@apply');
});

Route::group([
    'middleware'=>'auth:hotel'
], function (){
    Route::get('/job/postjob', 'PekerjaanController@create');
    Route::post('/job', 'PekerjaanController@store');

    Route::get('/job/{url_slug}/postlist','PekerjaanController@showList');
    Route::post('/job/{url_slug}/todolist', 'PekerjaanController@todolist');

    Route::get('/job/{url_slug}/edit','PekerjaanController@edit');
    Route::post('/job/update','PekerjaanController@update');
    Route::get('/job/{url_slug}/delete','PekerjaanController@delete');
    Route::patch('/hotel/{profile}', 'ProfileHotelController@update');
    Route::get('/hotel/{profile}/edit', 'ProfileHotelController@edit');
});

Route::get('/job/{url_slug}', 'PekerjaanController@show');

Route::get('/command/initpassport', function (){
    Artisan::call('passport:install');
});
