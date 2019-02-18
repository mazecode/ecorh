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

// Example Routes
Route::view('/', 'landing');

// Route::view('/examples/plugin', 'examples.plugin');
// Route::view('/examples/blank', 'examples.blank');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/documents', 'DocumentController@index2')->name('gen');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::match(['get', 'post'], '/', function () {
        return view('dashboard');
    })->name('dashboard');

    //! Roles
    Route::resource('roles', RoleController::class);

    //! Users
    Route::resource('users', UserController::class);
});

