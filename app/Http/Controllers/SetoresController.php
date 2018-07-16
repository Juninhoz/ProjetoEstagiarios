<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SetoresRequest;

class SetoresController extends Controller
{
    public $model = 'App\Setor';

    public function index()
    {
        return view('setores.index')->with(['model' => new $this->model]);
    }

    public function create()
    {
        $coordenadores = \App\Coordenador::all();
        return view('setores.create')->with(['model' => new $this->model, 'coordenadores' => $coordenadores]);
    }

    public function store(SetoresRequest $request)
    {
        $setor = new $this->model($request->all());
        $setor->save();
        return redirect('/setores/');
    }

    public function edit($id)
    {
        # code...
    }

    public function update()
    {
        # code...
    }

}
