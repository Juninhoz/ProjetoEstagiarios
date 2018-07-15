<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estagiario;
use App\Horario;
use App\User;
use App\Curso;
use App\Instituicao;
use App\Status;
use App\Setor;
use App\Http\Requests\EstagiariosRequest;
use App\Repositories\ImageRepository;
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
        $setores = Setor::all();
        return view('estagiarios.create')->with(['model' => new $this->model, 'horarios' => $horarios, 'instituicoes' => $instituicoes, 'setores' => $setores]);
    }

    public function store(EstagiariosRequest $request, ImageRepository $repo)
    {
        $estagiario = new $this->model($request->all());
        $estagiario = calculaRenovacoesEstagiario($estagiario);
        $estagiario->save();
        
        if($request->hasFile('imagem'))
        {
            $estagiario->imagem = $repo->saveImage($request->imagem, $estagiario->id, 'estagiario', 250);     
            $estagiario->update();
        }
        return redirect()->action('EstagiariosController@index');
    }

    public function edit($id)
    {
        $estagiario = Estagiario::findOrFail($id);
        $horarios = Horario::all();
        $instituicoes = Instituicao::all();
        $setores = Setor::all();
        return view('estagiarios.edit')->with(['model' => new $this->model, 'horarios' => $horarios, 'instituicoes' => $instituicoes, 'setores' => $setores, 'estagiario' => $estagiario]);
    }

    public function update($id,EstagiariosRequest $request, ImageRepository $repo)
    {
        $estagiario = Estagiario::find($id);
        $estagiario['nome'] = $request->input('nome');
        $estagiario['email'] = $request->input('email');
        $estagiario['horario_id'] = $request->input('horario_id');
        $estagiario['setor_id'] = $request->input('setor_id');
        $estagiario['curso_id'] = $request->input('curso_id');
        $estagiario['instituicao_id'] = $request->input('instituicao_id');
        $estagiario['telefone'] = $request->input('telefone');
        $estagiario['data_contrato'] = $request->input('data_contrato');

        $estagiario = calculaRenovacoesEstagiario($estagiario);
        $estagiario->update();

        if($request->hasFile('imagem'))
        {
            $estagiario->imagem = $repo->saveImage($request->imagem, $estagiario->id, 'estagiario', 250);
            $estagiario->update();
        }
        return redirect()->action('EstagiariosController@index');
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