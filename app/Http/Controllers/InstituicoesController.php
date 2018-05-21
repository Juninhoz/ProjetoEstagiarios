<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        return $request->all();
    }
}
