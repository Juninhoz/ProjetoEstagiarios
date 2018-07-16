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

        return view('home')->with(['renovacoes' => $quantidadeRenovacoes, 'quantidade' => $quantidadeEstagiarios]);
    }

    public function renovacoes()
    {
        $renovacoes = renovacoesEstagiarios();

        return view('estagiarios.renovacoes')->with(['renovacoes' => $renovacoes]);
    }
}
