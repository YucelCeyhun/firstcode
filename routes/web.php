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
    return view('main.home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('fc-admin')->namespace('Admin')->name('fc-admin.')->group(function (){
    Route::get('/','BaseController@index')->name('index');

    Route::prefix('home-settings')->namespace('HomeSettings')->name('home-settings.')->group(function (){
        Route::resource('/description','DescriptionController');
    });

    Route::prefix('content-settings')->namespace('ContentSettings')->name('contents.')->group(function (){
        Route::resource('/content','ContentController');
    });
});


