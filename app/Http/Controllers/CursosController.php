<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Instituicao;
use App\Http\Requests\CursosRequest;

class CursosController extends Controller
{
    protected $model = 'App\Curso';

    public function index()
    {
        return view('cursos.index')->with(['model' => new $this->model]);
    }

    public function create()
    {   
        $instituicoes = Instituicao::all();
        return view('cursos.create')->with(['model' => new $this->model, 'instituicoes' => $instituicoes]);
    }

    public function store(CursosRequest $request)
    {
        $instituicao = new $this->model($request->all());
        $instituicao->save();
        return redirect('/cursos/');
    }

    public function edit($id)
    {
        $curso = Curso::find($id);
        $instituicoes = Instituicao::all();
        return view('cursos.edit')->with(['model' => new $this->model, 'curso' => $curso, 'instituicoes' => $instituicoes]);
    }

    public function update(CursosRequest $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return redirect('/cursos/');
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        
        $curso->delete();
    }

}
