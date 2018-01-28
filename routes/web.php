<?php

/*
|--------------------------------------------------------------------------
| Rotas da aplicação
|--------------------------------------------------------------------------
|
| Nesse arquivo estarão as rotas utilizadas com relação aos estagiarios.
|
*/

Route::get('/','EstagiariosController@index');
  
Route::get('/estagiario/cadastro','EstagiariosController@paginaDeCadastroDeEstagiario');

//Rota para Exibir a view de alterar dados do estagiario.//
Route::get('/estagiario/alterardados/{id}','EstagiariosController@paginaDeEditarEstagiario');
//Rota para Alterar os dados do estagiario.//
Route::post('/estagiario/alterardados/{id}','EstagiariosController@editarEstagiario');

Route::post('/estagiario/cadastro','EstagiariosController@cadastrarEstagiario');

Route::get('/estagiario','EstagiariosController@exibirEstagiarios');

/*
|----------------------------------------------------------------------------
| Rotas para Emails
|----------------------------------------------------------------------------
*/

Route::get('/estagiario/mail/{id}','EstagiariosController@enviarEmailEstagiario');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('cadastro', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('cadastro', 'Auth\RegisterController@register');

Route::get('/layout', function() {
    return view('layouts.teste');
});