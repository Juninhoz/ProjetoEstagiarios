@extends('layouts.principal')

@section('titulo','Cadastro')

@section('conteudo')

    <div class="col-md-12">

        <div class="row">
            <div class="col-md-6">
                <h2>{{ $model->plural }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Cadastros</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ $model->singular }}</a></li>
                        <li class="breadcrumb-item active"><a href="#"></a>Novo</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="line"></div>

        <div class="container-fluid">

            <div class="panel">
                <div class="panel-body">
                    <form action="{{ action('SetoresController@store') }}" method="post">
                            {{ csrf_field() }}
                        <i class="glyphicon glyphicon-home"></i> Novo {{ $model->singular }}
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" name="nome">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Coordenador</label>
                                <select name="coordenador_id" class="form-control">
                            @foreach($coordenadores as $coordenador)
                                <option value="{{ $coordenador->id }}">{{ $coordenador->nome }}</option>
                            @endforeach    
                            </select>
                            </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-md-2 col-md-offset-5" style="margin-top: 10px">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="glyphicon glyphicon-floppy-save"></i> Cadastrar
                                    </button>
                                <button class="btn btn-warning" type="reset">
                                    <i class="glyphicon glyphicon-remove"></i> Limpar
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection