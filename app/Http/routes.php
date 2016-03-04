<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');
Route::get('admin/dashboard', 'PagesController@show');
Route::get('about', 'PagesController@about');
Route::get('show/{post_id}', 'BlogController@show');
Route::post('message', 'PagesController@store');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('admin/dashboard', 'HomeController@index');
    Route::get('notification', 'HomeController@show');
  	Route::get('edit/{post_id}', 'PostsController@edit');
    Route::get('create', 'PostsController@create');
    Route::post('store', 'PostsController@store');
    Route::put('update/{post_id}', 'PostsController@update');
    Route::delete('delete/{post_id}', 'PostsController@destroy');

});
