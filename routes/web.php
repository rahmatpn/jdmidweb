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


Route::get('/search', 'PekerjaanController@searchs');


Auth::routes();



Route::get('/masuk/seller', 'Auth\RegisterController@showHotelRegisterForm');

Route::get('/masuk/user', 'Auth\RegisterController@showUserRegisterForm');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');



Route::post('/login/hotel', 'Auth\LoginController@hotelLogin');

Route::post('/login/user', 'Auth\LoginController@userLogin');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');



Route::post('/masuk/seller', 'Auth\RegisterController@createHotel');

Route::post('/masuk/user', 'Auth\RegisterController@createUser');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin');



Route::group([

    'middleware'=>'auth:admin'

], function () {

    Route::get('/admin', 'AdminController@index');





    //User

    Route::get('/admin/user/manage', 'AdminController@indexUser');

    Route::get('/admin/user/{url_slug}/edit','ProfileUserController@edit');

    Route::get('/admin/user/{url_slug}/delete', 'ProfileUserController@destroy');

    Route::get('/admin/user/{url_slug}/verify', 'AdminController@viewVerifyUser');

    Route::post('/admin/user/{url_slug}/verify', 'AdminController@verifyUser');

    Route::patch('/admin/user/{url_slug}', 'ProfileUserController@update');

    Route::post('/admin/user/create', 'AdminController@adminCreateUser');;

    Route::patch('/admin/user/{profileUser}/berkas', 'ProfileUserController@updateBerkas');



    //Hotel

    Route::get('/admin/hotel/manage', 'AdminController@indexHotel');

    Route::get('/admin/hotel/{url_slug}/edit','ProfileHotelController@edit');

    Route::get('/admin/hotel/{url_slug}/delete', 'ProfileHotelController@destroy');

    Route::get('/admin/hotel/{url_slug}/verify', 'AdminController@viewVerifyHotel');

    Route::get('/admin/hotel/{url_slug}/verifyHotel', 'AdminController@verifyHotel');

    Route::get('/admin/hotel/{url_slug}/rejectHotel', 'AdminController@rejectHotel');

    Route::patch('/admin/hotel/{url_slug}', 'ProfileHotelController@update');

    Route::post('/admin/hotel/create', 'AdminController@adminCreateHotel');



    //Pekerjaan

    Route::get('/admin/pekerjaan/manage', 'AdminController@indexPekerjaan');

    Route::get('/admin/pekerjaan/{url_slug}/edit','PekerjaanController@edit');

    Route::get('/admin/pekerjaan/{url_slug}/delete','PekerjaanController@delete');

    Route::get('/admin/pekerjaan/{url_slug}/verify', 'AdminController@viewVerifyPekerjaan');

    Route::get('/admin/pekerjaan/{url_slug}/verifyPekerjaan', 'AdminController@verifyPekerjaan');

    Route::get('/admin/pekerjaan/{url_slug}/rejectPekerjaan', 'AdminController@rejectPekerjaan');

    Route::post('/pekerjaan/update','PekerjaanController@update');



    //Posisi

    Route::get('/admin/posisi/manage', 'AdminController@indexPosisi');

    Route::post('/admin/posisi/add', 'AdminController@createPosisi');;

    Route::get('/admin/posisi/{id}/delete', 'AdminController@destroyPosisi');

    Route::get('/admin/posisi/{id}/edit', 'AdminController@viewEditPosisi');

    Route::patch('/admin/posisi/{id}/save', 'AdminController@editPosisi');



});



Route::get('/home', 'HomeController@index');

Route::get('/home/hotel', 'HomeController@indexHotel');

Route::get('/joblist', 'KerjakanController@index');
Route::get('/joblist/{url_slug}/todolist', 'PekerjaanController@detailList');

Route::get('/hotel/{profile}', 'ProfileHotelController@indexHotel')->name('hotel.show');

Route::get('/user/{profile}', 'ProfileUserController@indexUser')->name('user.show');



Route::group([

    'middleware'=>'auth:user'

], function (){

    Route::get('/user/{profileUser}/edit', 'ProfileUserController@edit');

    Route::patch('/user/{profileUser}/berkas', 'ProfileUserController@updateBerkas');

    Route::patch('/user/{profileUser}', 'ProfileUserController@update');

    Route::post('/job/{url_slug}/apply', 'PekerjaanController@apply');
    Route::get('/viewJob/{url_slug}', 'PekerjaanController@show');
    Route::get('/job/{slug}/cancelApply/{url_slug}', 'PekerjaanController@cancelApply');

    Route::post('/job/{url_slug}/done', 'PekerjaanController@updateJobProgress');

    Route::get('/job/{slug}/finish/{url_slug}', 'PekerjaanController@confirmFinish');
});



Route::group([

    'middleware'=>'auth:hotel'

], function (){

    Route::get('/job/postjob', 'PekerjaanController@create');

    Route::post('/job', 'PekerjaanController@store');



    Route::get('/job/{url_slug}/postlist','PekerjaanController@showList');

    Route::post('/job/{url_slug}/todolist', 'PekerjaanController@todolist');



    Route::get('/job/{url_slug}/editlist','PekerjaanController@editList');
    Route::patch('/job/{url_slug}/updatelist', 'PekerjaanController@updateList');
    Route::get('/job/{url_slug}/delete/{id}','PekerjaanController@deleteList');
    Route::patch('/job/{url_slug}/updatelist', 'PekerjaanController@updateList');
    Route::get('/job/{slug}/accept/{url_slug}', 'PekerjaanController@acceptApply');
    Route::get('/job/{slug}/cancel/{url_slug}', 'PekerjaanController@rejectApply');
    Route::get('/job/{slug}/confirm/{url_slug}', 'PekerjaanController@confirmDone');
    Route::get('/job/{slug}/reset/{url_slug}', 'PekerjaanController@resetJob');




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

