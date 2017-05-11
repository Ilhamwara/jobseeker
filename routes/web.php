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

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();
// Route::get('/home', 'HomeController@index');


Route::get('/', 'UserController@login');
Route::post('login', 'UserController@post_login');
Route::get('register', 'UserController@register');
Route::post('register', 'UserController@post_register');
Route::get('register/perusahaan', 'UserController@reg_comp');
Route::post('register/perusahaan', 'UserController@postreg_comp');
Route::get('logout', 'UserController@logout');

Route::group(['middleware' => ['authnya']], function () {
    Route::get('dashboard', 'UserController@dashboard');
    Route::get('perusahaan', 'UserController@perusahaan');
    Route::get('pekerja', 'UserController@pekerja');
    Route::get('profile/{id}','UserController@profile');
    Route::get('delete/profile/{id}','UserController@delete_profile');
    Route::get('setting', 'UserController@setting');
    Route::post('setting', 'UserController@post_setting');
    Route::get('daftar-pekerjaan', 'UserController@job');
    Route::get('tambah/pekerjaan', 'UserController@add_job');
    Route::post('tambah/pekerjaan', 'UserController@postadd_job');
    Route::get('history', 'UserController@history');
});

