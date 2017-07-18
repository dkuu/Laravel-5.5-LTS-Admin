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
    //return view('welcome');
    return view('index');
});


/*
Route::get('/env', function () {
    return App::environment();;
});*/
Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/menu', 'Development\MenuController');
    Route::resource('/permission', 'Development\PermissionController');

    Route::get('/setting', 'Setting\SettingController@index');
    Route::post('/setting', 'Setting\SettingController@update');
    Route::resource('/role', 'Setting\RoleController');
    Route::resource('/user', 'Setting\UserController');
    Route::get('/profile', 'Setting\ProfileController@index');
    Route::patch('/profile', 'Setting\ProfileController@update');

    Route::any('/logout', 'Auth\LoginController@logout');
});