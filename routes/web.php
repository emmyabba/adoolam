<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/about-us', 'WelcomeController@about')->name('welcome.about');
Route::get('/contact-us', 'WelcomeController@contact')->name('welcome.contact');
Route::get('/all-courses', 'WelcomeController@index')->name('welcome.courses');
Route::get('/free-courses', 'WelcomeController@index')->name('welcome.free.courses');
Route::get('/popular-courses', 'WelcomeController@index')->name('welcome.popular.courses');
Route::get('/toprated-courses', 'WelcomeController@index')->name('welcome.toprated.courses');
