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

Route::group(['namespace' => 'Index'], function (){
    Route::get('/', 'IndexController@index')->name('index.home');

    Route::get('goods', 'GoodsController@index')->name('index.goods');

    Route::get('about', 'AboutController@index')->name('index.about');
});


Route::group(['namespace' => 'Admin'], function (){
    Route::get('/admin','IndexController@index')->name('admin.home');
    Route::get('/admin/login', 'SessionsController@create')->name('login');
    Route::post('/admin/login', 'SessionsController@store')->name('login');
    Route::delete('/admin/logout', 'SessionsController@destroy')->name('logout');

    Route::get('/admin/carousel','CarouselController@index')->name('admin.carousel');
    Route::post('/admin/carousel','CarouselController@list')->name('admin.carousel');

});

