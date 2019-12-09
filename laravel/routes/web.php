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

Route::get('/', 'MainController@index');

Route::get('/signup', 'MainController@signupGet');
Route::post('/signup', 'MainController@signupPost');

Route::get('/login', 'MainController@loginAlunoGet');
Route::post('/login', 'MainController@loginAlunoPost');

Route::get('/dashboard','MainController@dashboard');
Route::get('/logout','MainController@logout');

Route::get('/loginAdmin', 'AdminController@login');
Route::post('/loginAdmin', 'AdminController@loginAdmin');
