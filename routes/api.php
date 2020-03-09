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

Route::post('register','Api\AuthController@register');

Route::post('login','Api\AuthController@login');

Route::get('positions', 'Api\PositionController@getAllPositions');

Route::get('profile/{id}','Api\ProfileController@getUserProfile');

Route::get('profile/{id}/positions', 'Api\PositionController@getUserPositions');


Route::group([
   'middleware'=>'auth:api'
], function (){

    Route::get('auth/jobs','Api\JobController@getAllJobs');
    Route::get('auth/jobs/{query}','Api\JobController@getJobs');
    Route::get('auth/jobs/position/{position}','Api\JobController@getJobsWithPosition');

    Route::put('profile/{id}/update', 'Api\ProfileController@updateProfile');
    Route::post('profile/{id}/upload/profile', 'Api\ProfileController@uploadImage');
    Route::post('profile/{id}/upload/cover', 'Api\ProfileController@uploadCover');
    Route::post('profile/{id}/upload/ktp', 'Api\ProfileController@uploadKtp');
    Route::post('profile/{id}/upload/skck', 'Api\ProfileController@uploadSkck');
    Route::post('profile/{id}/upload/sertif', 'Api\ProfileController@uploadSertifikat');
    Route::post('profile/{id}/upload/kartu', 'Api\ProfileController@uploadkartuSatpam');
    Route::post('profile/positions/update','Api\PositionController@selectPosition');

    Route::post('logout','Api\AuthController@logout');

    Route::post('auth/jobs/{job}/apply','Api\JobController@applyJob');
    Route::post('auth/jobs/todo/{todo}/check', 'Api\ToDoListController@checkTodolist');

    Route::get('profile/{id}/acceptedjobs', 'Api\JobController@getUserAcceptedJob');
    Route::get('profile/{id}/appliedjobs', 'Api\JobController@getUserAppliedJob');
    Route::get('profile/{id}/activejobs', 'Api\JobController@getActiveJobs');
});

Route::get('jobs','Api\JobController@getAllJobs');
Route::get('jobs/{query}','Api\JobController@getJobs');
Route::get('jobs/position/{position}','Api\JobController@getJobsWithPosition');

Route::get('profile/{id}/jobhistory', 'Api\JobController@getUserJobHistory');
