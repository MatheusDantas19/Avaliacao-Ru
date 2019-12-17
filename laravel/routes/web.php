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


//metodos mainAdmin
Route::get('/mainAdmin', 'AdminController@main');

//metodos login
Route::get('/loginAdmin', 'AdminController@loginGet');
Route::post('/loginAdmin', 'AdminController@loginPost');

//metodos logout
Route::get('/logoutAdmin', 'AdminController@logout');

//metodos cadastro
Route::get('/createAdmin', 'AdminController@createGet');
Route::post('/createAdmin', 'AdminController@createPost');

//metodos update
Route::get('/updateAdmin', 'AdminController@updateGet');
Route::post('/updateAdmin', 'AdminController@updatePost');

//metodos delete
Route::get('/deleteAdmin', 'AdminController@deleteGet');
Route::post('/deleteAdmin', 'AdminController@deletePost');

//metodos prato
Route::get('/pratos', 'PratoController@pratos');

//metodo criarprato
//create
Route::get('/criarprato', 'PratoController@criarpratoGet');
Route::post('/criarprato', 'PratoController@criarpratoPost');


//delete
Route::get('/deleteprato','PratoController@deleteGet');
Route::post('/deleteprato','PratoController@deletePost');

//metodos Restaurante
//create
Route::get('/createRU', 'RestauranteController@createGet');
Route::post('/createRU', 'RestauranteController@createPost');

//updateAdmin
Route::get('/updateAdminRU', 'RestauranteController@updateAdminGet');
Route::post('/updateAdminRU', 'RestauranteController@updateAdminPost');

//update
Route::get('/updateRU', 'RestauranteController@updateGet');
Route::post('/updateRU', 'RestauranteController@updatePost');

//deleteAdmin
Route::get('/deleteAdminRU','RestauranteController@deleteAdminGet');
Route::post('/deleteAdminRU','RestauranteController@deleteAdminPost');

//delete
Route::get('/deleteRU','RestauranteController@deleteGet');
Route::post('/deleteRU','RestauranteController@deletePost');


//metodos Ingrediente
//create
Route::get('/createIngrediente','IngredienteController@createGet');
Route::post('/createIngrediente','IngredienteController@createPost');

//update
Route::get('/updateIngrediente','IngredienteController@updateGet');
Route::post('/updateIngrediente','IngredienteController@updatePost');

//delete
Route::get('/deleteIngrediente','IngredienteController@deleteGet');
Route::post('/deleteIngrediente','IngredienteController@deletePost');

//metodos Reclamação
Route::get('/criaReclamacao','ReclamacaoController@criaReclamacaoGet');
Route::post('/criaReclamacao','ReclamacaoController@criaReclamacaoPost');

Route::get('/verReclamacao','ReclamacaoController@verReclamacaoGet');
Route::post('/verReclamacao','ReclamacaoController@verReclamacaoPost');

Route::get('/pratos','PratoController@pratosGet');
Route::post('/pratos','PratoController@pratosPost');

//metodos resposta
//create
Route::get('/createResposta', 'RespostaController@createGet');
Route::post('/createResposta', 'RespostaController@createPost');

//relatorios

Route::get('/relatorio1', 'RelatorioController@relatorio1Get');
Route::post('/relatorio1', 'RelatorioController@relatorio1Post');

Route::get('/relatorio2', 'RelatorioController@relatorio2Get');
Route::post('/relatorio2', 'RelatorioController@relatorio2Post');

Route::get('/relatorio3', 'RelatorioController@relatorio3Get');
Route::post('/relatorio3', 'RelatorioController@relatorio3Post');


