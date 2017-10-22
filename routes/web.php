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
Route::get('/umkm', 'adminController@login');

Route::get('/adm', 'adminController@index');
Route::post('/adm/update_account', 'adminController@changeProfile');
Route::post('/adm/update_additional', 'adminController@changeAdditionalProfile');

Route::get('/adm/add_galery', 'adminController@addGalery');
Route::post('/adm/store_galery', 'adminController@stroreGalery');
Route::get('/adm/my_galery', 'adminController@myGalery');
Route::get('/adm/edit_galery/{id}', 'adminController@editGalery');
Route::post('/adm/update_galery', 'adminController@updateGalery');
Route::get('/adm/del_galery/{id}', 'adminController@delGalery');

Route::get('/adm/add_service', 'adminController@addService');
Route::post('/adm/store_service', 'adminController@storeService');
Route::get('/adm/my_service', 'adminController@myService');
Route::get('/adm/edit_service/{id}', 'adminController@editService');
Route::post('/adm/update_service', 'adminController@updateService');
Route::get('/adm/del_service/{id}', 'adminController@delService');

Route::get('/adm/slide', 'adminController@mySlide');
