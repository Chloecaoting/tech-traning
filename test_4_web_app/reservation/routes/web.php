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

Route::get('index', 'Reservations\IndexController@index')->name('reservations.index');

Route::get('reservations/create', 'Reservations\IndexController@create')->name('reservations.create');
Route::post('reservations', 'Reservations\IndexController@store')->name('reservations.store');

Route::get('reservations/{id}/edit', 'Reservations\IndexController@edit')->name('reservations.edit');
Route::patch('reservations/{id}', 'Reservations\IndexController@update')->name('reservations.update');

Route::delete('reservations/{id}', 'Reservations\IndexController@destroy')->name('reservations.destroy');

Auth::routes();
