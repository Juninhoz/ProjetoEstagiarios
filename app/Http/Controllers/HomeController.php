<?php

namespace App\Http\Controllers;

use App\Estagiario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quantidadeEstagiarios = Estagiario::all()->count();
        $quantidadeRenovacoes = qtdRenovaçõesEstagiarios();
        $finalizacoes = finalizacoesEstagiarios();

        return view('home')->with(['renovacoes' => $quantidadeRenovacoes, 'quantidade' => $quantidadeEstagiarios, 'finalizacoes' => count($finalizacoes)]);
    }

    public function renovacoes()
    {
        $renovacoes = renovacoesEstagiarios();

        return view('estagiarios.renovacoes')->with(['renovacoes' => $renovacoes]);
    }

    public function finalizacoes()
    {
        $estagiarios = finalizacoesEstagiarios();
        return view('estagiarios.finalizacoes')->with(['estagiarios' => $estagiarios]);
    }
}
