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

Route::group(['prefix' => 'grade'], function () {
	Route::get('criar',"GradeController@criar");
	Route::get('listar',"GradeController@listar");
	Route::get('editar/{id}',"GradeController@editar");
	Route::get('remover/{id}',"GradeController@remover");
	Route::post('salvar',"GradeController@salvar");
});


//Route::get('/curso/criar', function () {
    //return view('curso/criar');});

#seção salas abaixo \/\/\/

Route::group(['prefix' => '/salas'], function(){
    Route::get('listar', "SalasController@listar");
    Route::post('listar', "SalasController@procurar");
    Route::get('cadastro', "SalasController@cadastro");
    Route::get('remover/{id}', "SalasController@remover");
    Route::get('editar/{id}', "SalasController@editar" );
    Route::post('salvar', "SalasController@salvar");

});

Route::group(['prefix' => '/blocos'], function(){
Route::get('cria', "BlocoController@index");

});

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
