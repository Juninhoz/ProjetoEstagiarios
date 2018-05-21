<?php

/*
|--------------------------------------------------------------------------
| Rotas da aplicação
|--------------------------------------------------------------------------
|
| Nesse arquivo estarão as rotas utilizadas com relação aos estagiarios.
|
*/

Auth::routes();

Route::get('/','HomeController@index');

Route::get('/estagiarios','EstagiariosController@index');

Route::get('/estagiarios/create','EstagiariosController@create');

Route::get('/estagiarios/alterardados/{id}','EstagiariosController@paginaDeEditarEstagiario');

Route::post('/estagiarios/alterardados/{id}','EstagiariosController@editarEstagiario');

Route::post('/estagiarios/cadastro','EstagiariosController@cadastrarEstagiario');

Route::post('/estagiarios/remover/{id}', ['as' => 'estagiario.remover', 'uses' => 'EstagiariosController@remove' ]);


// ROTAS PARA SETORES

Route::get('/setores', 'SetoresController@index');

Route::get('/setores/create', 'SetoresController@create');

Route::post('/setores', 'SetoresController@store');


// ROTAS PARA COORDENADORES

Route::get('/coordenadores', 'CoordenadoresController@index');

Route::get('/coordenadores/create', 'CoordenadoresController@create');

Route::post('/coordenadores', 'CoordenadoresController@store');

Route::get('/coordenadores/edit/{id}', 'CoordenadoresController@edit');

Route::post('/coordenadores/destroy/{id}', 'CoordenadoresController@destroy');



/** Rotas para instituições */
Route::group(['prefix' => 'instituicoes'], function(){
  
  Route::get('/', ['as' => 'instituicoes.index', 'uses' => 'InstituicoesController@index']);

  Route::get('/create', ['as' => 'instituicoes.create', 'uses' => 'InstituicoesController@create']);

  Route::post('/store', ['as' => 'instituicoes.store', 'uses' => 'InstituicoesController@store']);

  Route::get('/edit', ['as' => 'instituicoes.edit', 'uses' => 'InstituicoesController@edit']);

  Route::post('/update', ['as' => 'instituicoes.update', 'uses' => 'InstituicoesController@update']);

});

/*
  |-------------------|
  | Rotas para Emails |
  |-------------------|
*/

Route::get('/estagiario/mail/{id}','EstagiariosController@enviarEmailEstagiario');

Route::get('/home', 'HomeController@index');

Route::get('cadastro', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('cadastro', 'Auth\RegisterController@register');


/*
 *  DataTables Routes.
 */


//Route::get('/datatables', 'DatatablesController@getIndex');
//
//Route::get('/data', 'DatatablesController@anyData')->name('datatables.data');

Route::get('/estagiarios-data', 'DatatablesController@anyData')->name('estagiarios.data');

Route::get('/coordenadores-data', 'DatatablesController@coordenadoresAnyData')->name('coordenadores.data');

Route::get('/setores-data', 'DatatablesController@setoresAnyData')->name('setores.data');