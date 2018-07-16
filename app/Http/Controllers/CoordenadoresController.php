<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CoordenadoresRequest;

class CoordenadoresController extends Controller
{
    public $model = 'App\Coordenador';

    public function index()
    {
        return view('coordenadores.index')->with(['model' => new $this->model]);
    }

    public function create()
    {
        return view('coordenadores.create')->with(['model'=> new $this->model]);
    }

    public function store(CoordenadoresRequest $request)
    {
        $coordenador = new $this->model($request->all());
        $coordenador->save();

        return redirect('/coordenadores/');
    }

    public function edit($id)
    {
        $coordenador = $this->model::find($id);
        return view('coordenadores.edit')->with(['model' => new $this->model,'coordenador' => $coordenador]);
    }

    public function update(CoordenadoresRequest $request, $id)
    {
        $coordenador = $this->model::find($id);
        $coordenador['nome'] = $request->input('nome');
        $coordenador['email'] = $request->input('email');
        $coordenador['telefone'] = $request->input('telefone');
        $coordenador->update();
        return redirect('/coordenadores/');
    }

    public function destroy($id)
    {
        $coordenador = $this->model::find($id);
        $coordenador->delete();
        return redirect('/coordenadores/');
    }
}