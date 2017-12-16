<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estagiario;
use App\Horario;
use App\User;
use Mail;

class EstagiariosController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function home()
    {
        return view();
    }

    public function paginaDeCadastroDeEstagiario(Request $request)
    {
        $horarios = Horario::all();

        return view('estagiarios.cadastro')->with('horarios',$horarios);
    }

    public function cadastrarEstagiario(Request $request)
    {     
        $estagiario = new Estagiario($request->all());

        $estagiario = $estagiario->calculaRenovacoesEstagiario($estagiario);

        $estagiario->save();

        return redirect('/estagiario/cadastro');
    }

    public function exibirEstagiarios()
    {   
        $estagiario = new Estagiario();
        
        $estagiarios = Estagiario::all();
        
        $message = $estagiario->verificaRenovaçõesEstagiario($estagiarios);
        
        $estagiario = $estagiario->converteExibicaoDeDatas($estagiarios);

        return view('estagiarios.home')->with(['estagiarios'=>$estagiario,'mensagem'=>$message]);        
    }

    public function paginaDeEditarEstagiario($id)
    {
        $estagiario = Estagiario::find($id);
        
        $horarioesta = Estagiario::find($id)->Horario;
        
        $horarios = Horario::all();

        return view('estagiarios.alterardadosestagiario')->with(['estagiario' => $estagiario,'horarios' => $horarios,'horarioesta' => $horarioesta]);
    }

    public function editarEstagiario($id, Request $request)
    {
        $estagiario = Estagiario::find($id);
        
        $estagiario->update($request->all());

        return redirect()->action('EstagiariosController@exibirEstagiarios');
    }

    public function destroy($id)
    {
        
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
