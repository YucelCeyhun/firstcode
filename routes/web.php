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

use Illuminate\Support\Facades\Auth;



#All Main Routes#
Route::namespace('Main')->name('main.')->group(function (){

    Route::get('/','HomeController@index')->name('home');
    Route::get('/about','AboutController@index')->name('about.index');
    Route::get('/contact','ContactController@index')->name('contact.index');
    Route::post('/contact','ContactController@store')->name('contact.show');

    Route::get('/lessons','ContentController@index')->name('lessons');
    Route::get('/content/{content}','ContentController@show')->name('content.show');

    Route::get('/tag/{tag}','TagController@show')->name('tag.show');
    Route::post('/comment/{content}','CommentController@store')->name('comment.store');
    Route::get('/category/{category}','CategoryController@show')->name('category.show');


    Route::get('/sitemap.xml','SitemapController@index')->name('sitemap');
});

#All Admin Routes#
Route::prefix('fc-admin')->namespace('Admin')->name('fc-admin.')->group(function (){
    Route::middleware([])->group(function (){
        Route::get('/','BaseController@index')->name('index');

        Route::prefix('home-settings')->namespace('HomeSettings')->name('home-settings.')->group(function (){
            Route::resource('/description','DescriptionController');
            Route::resource('/category','CategoryController');
        });

        Route::prefix('content-settings')->namespace('ContentSettings')->name('contents.')->group(function (){
            Route::resource('/content','ContentController');
        });

        Route::get('logout', 'AuthController@logout')->name('logout');
    });

    Route::get('login', 'AuthController@showLoginForm')->name('auth.show');
    Route::post('login', 'AuthController@login')->name('auth.login');


});



