<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ShowController@index');
Route::get('/indexUsers', 'ShowController@indexUsers');
Route::get('/dashboard', 'ShowController@dashboard');
Route::get('/inbox', 'ShowController@inbox');
Route::get('/partner', 'ShowController@partner');
Route::get('/ideas', 'ShowController@ideas');
Route::get('/projectPosters', 'ShowController@projectPosters');
Route::get('/projectPartners', 'ShowController@projectWorkers');
Route::get('/profile', 'ShowController@profile');
Route::get('/payment', 'ShowController@payment');

// auth 
Route::get('/register', 'ShowController@register');
Route::get('/login', 'ShowController@login');


