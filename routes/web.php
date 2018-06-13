<?php

/*
|--------------------------------------------------------------------------
| Rotas da aplicação
|-------------------------------------------------------------------------- 
*/
use App\Curso;
use App\Instituicao;


Auth::routes();

Route::get('/','HomeController@index');

// ROTAS PARA ESTAGIARIOS

Route::group(['prefix' => 'estagiarios'], function(){

  Route::get('/',['as' => 'estagiario.index', 'uses' => 'EstagiariosController@index']);

  Route::get('/create',['as' => 'estagiario.create', 'uses' => 'EstagiariosController@create']);
  
  Route::post('/store',['as' => 'estagiario.update', 'uses' => 'EstagiariosController@store']);

  Route::get('/edit/{id}',['as' => 'estagiario.update', 'uses' => 'EstagiariosController@edit']);
  
  Route::post('/update/{id}',['as' => 'estagiario.update', 'uses' => 'EstagiariosController@update']);
  
  Route::post('/destroy/{id}', ['as' => 'estagiario.destroy', 'uses' => 'EstagiariosController@remove']);

});

// ROTAS PARA SETORES

Route::group(['prefix' => 'setores'], function(){

  Route::get('/', ['as' => 'setor.index', 'uses' => 'SetoresController@index']);

  Route::get('/create', ['as' => 'setor.create', 'uses' => 'SetoresController@create']);

  Route::post('/store', ['as' => 'setor.store', 'uses' => 'SetoresController@store']);

});

// ROTAS PARA COORDENADORES

Route::group(['prefix' => 'coordenadores'], function(){

  Route::get('/', ['as' => 'coordenador.index', 'uses' => 'CoordenadoresController@index']);

  Route::get('/create', ['as' => 'coordenador.create', 'uses' => 'CoordenadoresController@create']);

  Route::post('/store', ['as' => 'coordenador.store', 'uses' => 'CoordenadoresController@store']);

  Route::get('/edit/{id}', ['as' => 'coordenador.edit', 'uses' => 'CoordenadoresController@edit']);

  Route::post('/destroy/{id}', ['as' => 'coordenador.destroy', 'uses' => 'CoordenadoresController@destroy']);

});

/** Rotas para instituições */
Route::group(['prefix' => 'instituicoes'], function(){
  
  Route::get('/', ['as' => 'instituicao.index', 'uses' => 'InstituicoesController@index']);

  Route::get('/create', ['as' => 'instituicao.create', 'uses' => 'InstituicoesController@create']);

  Route::post('/store', ['as' => 'instituicao.store', 'uses' => 'InstituicoesController@store']);

  Route::get('/edit/{id}', ['as' => 'instituicao.edit', 'uses' => 'InstituicoesController@edit']);

  Route::post('/update/{id}', ['as' => 'instituicao.update', 'uses' => 'InstituicoesController@update']);

  Route::post('/destroy/{id}', ['as' => 'instituicao.destroy', 'uses' => 'InstituicoesController@destroy']);

});

/** Rotas para Cursos */
Route::group(['prefix' => 'cursos'], function(){
  
  Route::get('/', ['as' => 'curso.index', 'uses' => 'CursosController@index']);

  Route::get('/create', ['as' => 'curso.create', 'uses' => 'CursosController@create']);

  Route::post('/store', ['as' => 'curso.store', 'uses' => 'CursosController@store']);

  Route::get('/edit/{id}', ['as' => 'curso.edit', 'uses' => 'CursosController@edit']);

  Route::post('/update/{id}', ['as' => 'curso.update', 'uses' => 'CursosController@update']);

  Route::post('/destroy/{id}', ['as' => 'curso.destroy', 'uses' => 'CursosController@destroy']);

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

Route::get('/instituicoes-data', 'DatatablesController@instituicoesAnyData')->name('instituicoes.data');

Route::get('/cursos-data', 'DatatablesController@cursosAnyData')->name('cursos.data');








// Rotas ajax

Route::get('/teste/{id}', function($id){
  
  $cursos = instituicao::find($id)->curso;
  return $cursos;

})->name('teste.teste');