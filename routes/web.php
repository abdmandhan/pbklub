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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group([
    'middleware'    => ['web', 'auth', 'role:admin|peneliti|guest'],
    'as'            => 'bahan::',
    'prefix'        => 'bahan',
], function () {
    Route::resource('bahan', 'BahanController');
    Route::resource('pengajuan-bahan', 'PengajuanBahanController');
});

Route::group([
    'middleware'    => ['web', 'auth', 'role:admin'],
    'as'            => 'user::',
    'prefix'        => 'user',
], function () {
    Route::resource('user', 'UserController');
});
