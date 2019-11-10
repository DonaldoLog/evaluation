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
    return view('admin.dashboard');
});

Route::name('careers.')->prefix('careers')->group(function () {
    Route::get('/index', 'CareerController@index')->name('.index');
    Route::get('/{careerId}', 'CareerController@getCareer')->name('.get');
    Route::post('/store', 'CareerController@store')->name('.store');
    Route::post('/update', 'CareerController@updateCareer')->name('.update');
    Route::post('/data', 'CareerController@getCareers');
    Route::post('/destroy', 'CareerController@destroyCareer')->name('.destroy');
});
