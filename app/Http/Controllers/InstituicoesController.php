<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstituicoesRequest;
use App\Instituicao;

class InstituicoesController extends Controller
{
    protected $model = 'App\Instituicao';

    public function index()
    {
        return view('instituicoes.index')->with(['model' => new $this->model]);
    }

    public function create()
    {   
        return view('instituicoes.create')->with(['model' => new $this->model]);
    }

    public function store(InstituicoesRequest $request)
    {
        $instituicao = new $this->model($request->all());
        $instituicao->save();
        return redirect('/instituicoes/');
    }

    public function edit($id)
    {
        $instituicao = Instituicao::find($id);
    
        return view('instituicoes.edit')->with(['model' => new $this->model, 'instituicao' => $instituicao]);
    }

    public function update(InstituicoesRequest $request, $id)
    {
        $instituicao = Instituicao::findOrFail($id);
        $instituicao->update($request->all());
        return redirect('/instituicoes/');
    }

    public function destroy($id)
    {
        $instituicao = Instituicao::findOrFail($id);
        
        $instituicao->delete();
    }
}
