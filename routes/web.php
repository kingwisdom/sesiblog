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

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/ads', 'PagesController@ads')->name('ads');
Route::get('/faq', 'PagesController@faq')->name('faq');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

