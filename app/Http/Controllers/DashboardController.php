<?php

namespace App\Http\Controllers;

use App\Coordenador;
use App\Estagiario;
use Illuminate\Http\Request;
use App\Setor;

class DashboardController extends Controller
{
    public function index()
    {
        $setores = Setor::all();
        return view('dashboard.index')->with(['setores' => $setores]);
    }

    public function setor($id)
    {
        $estagiarios = Estagiario::where('setor_id', $id)->get();
        $setor = Setor::find($id);
        return view('dashboard.setor')->with(['setor' => $setor, 'estagiarios' => $estagiarios, 'idSetor' => $id]);
    }
}
