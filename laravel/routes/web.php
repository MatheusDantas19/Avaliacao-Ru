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

Route::get('/signup', 'AlunoController@signupGet');
Route::post('/signup', 'AlunoController@signupPost');

Route::get('/login', 'AlunoController@loginAlunoGet');
Route::post('/login', 'AlunoController@loginAlunoPost');

Route::get('/dashboard','AlunoController@dashboard');
Route::get('/logout','AlunoController@logout');

//metodos mainAdmin
Route::get('/mainAdmin', 'AdminController@main');

//metodos loginAdmin
Route::get('/loginAdmin', 'AdminController@loginGet');
Route::post('/loginAdmin', 'AdminController@loginPost');

//metodos logoutAdmin
Route::get('/logoutAdmin', 'AdminController@logout');

//metodos cadastroAdmin
Route::get('/createAdmin', 'AdminController@createGet');
Route::post('/createAdmin', 'AdminController@createPost');

//metodos updateAdmin
Route::get('/updateAdmin', 'AdminController@updateGet');
Route::post('/updateAdmin', 'AdminController@updatePost');

//metodos updateAdmin
Route::get('/deleteAdmin', 'AdminController@deleteGet');
Route::post('/deleteAdmin', 'AdminController@deletePost');
