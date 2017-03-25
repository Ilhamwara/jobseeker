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


Route::get('/', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});

Route::get('dashboard', function () {
    return view('dashborad');
});

Route::get('perusahaan', function () {
    return view('perusahaan.index');
});
Route::get('tambah/perusahaan', function () {
    return view('perusahaan.tambah');
});

Route::get('pekerja', function () {
    return view('pekerja.index');
});
Route::get('tambah/pekerjaan', function () {
    return view('pekerjaan.tambah');
});

Route::get('profile', function () {
    return view('user.profile');
});
Route::get('setting', function () {
    return view('user.setting');
});

Route::get('history', function () {
    return view('history.index');
});

