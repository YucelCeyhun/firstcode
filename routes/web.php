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

use App\Content;

Route::get('/','Main\HomeController@index');

Route::get('/content/{content}','Main\ContentController@show')->name('main.content.show');
Route::post('/comment/{content}','Main\CommentController@store');
Route::get('lessons')->name('main.lessons');

Route::prefix('fc-admin')->namespace('Admin')->name('fc-admin.')->group(function (){
    Route::get('/','BaseController@index')->name('index');

    Route::prefix('home-settings')->namespace('HomeSettings')->name('home-settings.')->group(function (){
        Route::resource('/description','DescriptionController');
        Route::resource('/category','CategoryController');
    });

    Route::prefix('content-settings')->namespace('ContentSettings')->name('contents.')->group(function (){
        Route::resource('/content','ContentController');
    });
});


