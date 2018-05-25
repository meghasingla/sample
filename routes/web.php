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

Route::view('/', 'index')->name('home');
Route::view('services', 'services')->name('services');
Route::view('contact', 'contact')->name('contact');
Route::view('about-us', 'about')->name('about');

Route::post('contact', 'ContactController@send');