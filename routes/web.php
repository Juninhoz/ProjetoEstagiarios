<?php

/*
|--------------------------------------------------------------------------
| Rotas da aplicação
|--------------------------------------------------------------------------
|
| Nesse arquivo estarão as rotas utilizadas com relação aos estagiarios.
|
*/

Route::get('/','HomeController@index');


Route::get('/estagiario/create','EstagiariosController@create');

Route::get('/estagiario/alterardados/{id}','EstagiariosController@paginaDeEditarEstagiario');

Route::post('/estagiario/alterardados/{id}','EstagiariosController@editarEstagiario');

Route::post('/estagiario/cadastro','EstagiariosController@cadastrarEstagiario');

Route::get('/estagiario','EstagiariosController@index');

Route::post('/estagiario/remover/{id}',['as' => 'estagiario.remover', 'uses' => 'EstagiariosController@remove' ]);

// ROTAS PARA SETORES

Route::get('/setores', 'SetoresController@index');

Route::get('/setores/create', 'SetoresController@create');


// ROTAS PARA COORDENADORES

Route::get('/coordenadores', 'CoordenadoresController@index');

Route::get('/coordenadores/create', 'CoordenadoresController@create');

Route::post('/coordenadores/create', 'CoordenadoresController@store');


/*
  |-------------------|
  | Rotas para Emails |
  |-------------------|
*/

Route::get('/estagiario/mail/{id}','EstagiariosController@enviarEmailEstagiario');

Auth::routes();

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