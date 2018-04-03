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
}