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

Route::get('/', function () {

    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/grade', 'CadastroGradeController@index')->name('grade');
Route::post('/grade/salvar', 'CadastroGradeController@store');



//Route::get('/curso/criar', function () {
    //return view('curso/criar');});

#seção salas abaixo \/\/\/

Route::get('/salas/cadastro', function () {

    return view('salas/cadastroSalas');
});


Route::get('/salas/listar', function () {
    return view('salas/listarSalas');});


#seção salas acima /\/\/\


Route::group(['prefix' => 'campus'], function () {
	Route::get('criar',"CampusController@criar");
	Route::get('listar',"CampusController@listar");
	Route::get('editar/{id}',"CampusController@editar");
	Route::get('remover/{id}',"CampusController@remover");
	Route::post('salvar',"CampusController@salvar");
});






Route::get('/bloco', 'BlocoController@index')->name('bloco');

Route::get('/localizar', 'LocalizarController@index')->name('localizar');

Route::get('/rota', 'RotaController@index')->name('rota');



Route::get('/cadastrarsala', function () {
    return view('/cadastrarsala');});

