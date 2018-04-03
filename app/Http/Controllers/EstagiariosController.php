<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estagiario;
use App\Horario;
use App\User;
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

        return view('estagiarios.create')->with(['model' => new $this->model]);
    }

    public function store(Request $request)
    {
        
    }

    public function remove($id)
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

    public function enviarEmailEstagiario(Request $request, $id)
    {
        $user = User::findOrFail(1);

        $estagiario = Estagiario::find($id);

        Mail::send('emails.enviar', ['user' => $user], function ($m) use ($user) {

            $m->to('teste@gmail.com');

            $m->from('duda.ifal@gmail.com');
        });

    }
}