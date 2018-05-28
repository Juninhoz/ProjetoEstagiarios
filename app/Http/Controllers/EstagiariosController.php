<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estagiario;
use App\Horario;
use App\User;
use App\Curso;
use App\Instituicao;
use App\Status;
use Mail;

class EstagiariosController extends Controller
{

    public $model = 'App\Estagiario';

    public function index()
    {
        return view('estagiarios.index')->with(['model' => new $this->model]);
    }

    public function create()
    {
        $horarios = Horario::all();
        $instituicoes = Instituicao::all();
        return view('estagiarios.create')->with(['model' => new $this->model, 'horarios' => $horarios, 'instituicoes' => $instituicoes]);
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function destroy($id)
    {
        $estagiario = Estagiario::find($id);
        if ($estagiario) {
            $estagiario->delete();
            $dados['sucess'] = 1;
        } else {
            $dados['sucess'] = 0;
            $dados['message'] = 'Erro ao remover o Estagiario.';
        }
        return $dados;
    }
}