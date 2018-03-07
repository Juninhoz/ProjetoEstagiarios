<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetoresController extends Controller
{
    public $model = 'App\Setor';

    public function index()
    {
        return view('setores.index');
    }

    public function create()
    {
        return view('setores.create')->with(['model' => new $this->model]);;
    }

}
