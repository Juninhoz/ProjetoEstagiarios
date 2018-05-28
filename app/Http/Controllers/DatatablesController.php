<?php

namespace App\Http\Controllers;
use App\User;
use App\Estagiario;
use App\Coordenador;
use App\Setor;
use App\Instituicao;
use App\Curso;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('datatables.datatables');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(Estagiario::query())
            ->addColumn('action', function ($user) {
            return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
        })->make(true);
    }

    public function coordenadoresAnyData()
    {
        return Datatables::of(Coordenador::query())
            ->addColumn('action', function ($user) {
                return '<a href="coordenadores/edit/'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }

    public function setoresAnyData()
    {
        $query = Setor::with('coordenador')->select('setores.*');

        return Datatables::of($query)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }

    public function instituicoesAnyData()
    {
        return Datatables::of(Instituicao::query())
            ->addColumn('action', function ($user) {
                return '<a href="instituicoes/edit/'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }

    public function cursosAnyData()
    {
        $query = Curso::with('instituicao')->select('cursos.*');

        return Datatables::of($query)
            ->addColumn('action', function ($user) {
                return '<a href="cursos/edit/'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }
}