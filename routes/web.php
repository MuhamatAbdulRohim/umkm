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

Route::get('/', 'IndexController@index');
Route::get('login', ['as' => 'login', 'uses' => 'LoginController@login']);
Route::post('login', ['as' => 'login.post', 'uses' => 'LoginController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);


Route::group(["prefix" => "/adm", "middleware" => "auth"], function (){
    Route::get('/', 'adminController@index')->name('index.admin');
    Route::post('/update_account', 'adminController@changeProfile');
    Route::post('/update_user', 'adminController@changeAccount');
    Route::post('/update_additional', 'adminController@changeAdditionalProfile');

    Route::get('/add_galery', 'adminController@addGalery');
    Route::post('/store_galery', 'adminController@storeGalery')->name('post.galery');
    Route::get('/my_galery', 'adminController@myGalery')->name('index.galery');
    Route::get('/edit_galery/{id}', 'adminController@editGalery');
    Route::post('/update_galery', 'adminController@updateGalery')->name('update.galery');
    Route::get('/del_galery/{id}', 'adminController@delGalery');

    Route::get('/add_service', 'adminController@addService');
    Route::post('/store_service', 'adminController@storeService');
    Route::get('/my_service', 'adminController@myService');
    Route::get('/edit_service/{id}', 'adminController@editService');
    Route::post('/update_service', 'adminController@updateService');
    Route::get('/del_service/{id}', 'adminController@delService');

    Route::get('/slide', 'adminController@mySlide');
    Route::post('/slide', 'adminController@updateSlide')->name('update.slide');

});

