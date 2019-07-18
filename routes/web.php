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
    Route::get("/admin/carousel/add", 'CarouselController@carousel_add')->name('admin.carousel.add');
    Route::post("/admin/carousel/add", 'CarouselController@carousel_form')->name('admin.carousel.add');
    Route::get("/admin/carousel/{carousel}/edit/",'CarouselController@edit')->name('admin.carousel.edit');
    Route::patch('/admin/carousel/{carousel}', 'CarouselController@update')->name('admin.carousel.update');
    Route::get('/admin/carousel/{carousel}/destroy/', 'CarouselController@destroy')->name('admin.carousel.destroy');

    Route::get('/admin/goods_cats/index', "GoodsCatsController@index")->name('goods_cats.index');
    Route::post('/admin/goods_cats/index', "GoodsCatsController@list")->name('goods_cats.index');
    Route::get("/admin/goods_cats/add", 'GoodsCatsController@add')->name('goods_cats.add');
    Route::post("/admin/goods_cats/add", 'GoodsCatsController@add_form')->name('goods_cats.add');
    Route::get("/admin/goods_cats/{goods_cat}/edit/",'GoodsCatsController@edit')->name('goods_cats.edit');
    Route::patch('/admin/goods_cats/{goods_cat}', 'GoodsCatsController@update')->name('goods_cats.update');
    Route::get('/admin/goods_cats/{goods_cat}/destroy/', 'GoodsCatsController@destroy')->name('goods_cats.destroy');


});

