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
Auth::routes();
    Route::group(['middleware' => 'auth'], function(){
    Route::get('/','HomeController@index');
    Route::get('/users/create', 'UserController@create');
    Route::get('/','HomeController@index');
    Route::get('/users/research','UserController@research');
    Route::get('users/{user}', 'UserController@show');
    Route::post('/users/{user}','UserController@store');
    Route::post('/kensaku','UserController@kensaku');
    Route::get('/','HomeController@index');
    Route::get('/chat/{recieve}' , 'ChatController@index')->name('chat');
    Route::post('/chat/send' , 'ChatController@store')->name('chatSend');
    

});
