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
Route::get('/adm/add_service', 'adminController@addService');
Route::get('/adm/my_service', 'adminController@myService');
Route::get('/adm/add_galery', 'adminController@addGalery');
Route::get('/adm/my_galery', 'adminController@myGalery');
Route::get('/adm/slide', 'adminController@mySlide');
