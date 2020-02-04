<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register','Api\AuthController@register');

Route::post('/login','Api\AuthController@login');

Route::get('/positions', 'Api\PositionController@getAllPositions');

Route::get('/profile/{id}','Api\ProfileController@getUserProfile');

Route::get('profile/{id}/positions', 'Api\PositionController@getUserPositions');

Route::get('jobs','Api\JobController@getAllJobs');
Route::get('jobs/{query}','Api\JobController@getJobs');
Route::get('jobs/position/{position}','Api\JobController@getJobsWithPosition');

Route::group([
   'middleware'=>'auth:api'
], function (){
    Route::put('/profile/{id}/update', 'Api\ProfileController@updateProfile');
    Route::post('profile/{id}/upload/profile', 'Api\ProfileController@uploadImage');
    Route::post('profile/{id}/upload/cover', 'Api\ProfileController@uploadCover');
    Route::post('profile/positions/update','Api\PositionController@selectPosition');
    Route::post('logout','Api\AuthController@logout');
});
