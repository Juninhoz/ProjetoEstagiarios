<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoordenadoresController extends Controller
{
    public $model = 'App\Coordenador';

    public function index()
    {
        return view('coordenadores.index');
    }

    public function create()
    {
        return view('coordenadores.create')->with(['model'=> new $this->model]);
    }

    public function store(Request $request)
    {

    }
}
