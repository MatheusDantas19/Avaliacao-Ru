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

use Illuminate\Routing\Route;

Route::get('/', 'MainController@index');

Route::get('/signup', 'MainController@signupGet');
Route::post('/signup', 'MainController@signupPost');

Route::get('/login', 'MainController@loginAlunoGet');
Route::post('/login', 'MainController@loginAlunoPost');

Route::get('/dashboard','MainController@dashboard');
Route::get('/logout','MainController@logout');

//metodos loginAdmin
Route::get('/loginAdmin', 'AdminController@loginAdminGet');
Route::post('/loginAdmin', 'AdminController@loginAdminPost');

//metodos logoutAdmin
Route::get('/logoutAdmin', 'AdminController@logout');

//metodos mainAdmin
Route::get('/mainAdmin', 'AdminController@main');

//metodos cadastroAdmin
Route::get('/cadastroAdmin', 'AdminController@cadastroAdminGet');
