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

Route::get('/alterar','AlunoController@alterarGet');
Route::post('/alterar','AlunoController@alterarPost');

Route::get('/deletar','AlunoController@deletar');

Route::get('/logout','AlunoController@logout');

//metodos loginAdmin
Route::get('/loginAdmin', 'AdminController@loginAdminGet');
Route::post('/loginAdmin', 'AdminController@loginAdminPost');

//metodos logoutAdmin
Route::get('/logoutAdmin', 'AdminController@logout');

//metodos mainAdmin
Route::get('/mainAdmin', 'AdminController@main');

//metodos cadastroAdmin
Route::get('/cadastroAdmin', 'AdminController@cadastroAdminGet');
Route::post('/cadastroAdmin', 'AdminController@cadastroAdminPost');
