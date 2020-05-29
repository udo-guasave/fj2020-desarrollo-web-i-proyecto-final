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
    return view('welcome');
});


Auth::routes();

Route::middleware(['auth','web'])->group(function () {
    Route::get('user/list', 'UserController@index');
    Route::get('user/edit/{id}', 'UserController@edit');
    Route::resource('alumno', 'AlumnoController');
});

Route::get('/home', 'HomeController@index')->name('home');
