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
Route::get('/', function () {
    return view('welcome');
});

// Auth::route();
Route::get('homepages', 'staticpagecontroller@homepage');
Route::get('about', 'staticpagecontroller@about');
Route::get('services', 'staticpagecontroller@services');
Route::get('contact', 'staticpagecontroller@contact');
Route::get('aboutus', 'staticpagecontroller@aboutus');


Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/login', 'LoginController@login')->name('login');
Route::get('/register', 'RegisterController@register')->name('register');
Route::resource('users', 'UserController');
Route::resource('admin', 'AdminController');
Route::resource('/contact', 'ContactController');
