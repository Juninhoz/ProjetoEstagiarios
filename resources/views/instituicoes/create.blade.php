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
                    <li class="breadcrumb-item"><a href="{{ route('instituicao.index') }}">{{ $model->singular }}</a></li>
                        <li class="breadcrumb-item active"><a href="#"></a>Novo</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="line"></div>

        <div class="container-fluid">

            <div class="panel">
                <div class="panel-body">
                    <form action="{{ action('InstituicoesController@store') }}" method="post">
                            {{ csrf_field() }}
                        <i class="glyphicon glyphicon-home"></i> Nova {{ $model->singular }}
                        <hr>
                        <div class="row">
                            @if ($errors->has('nome'))
                                <div class="form-group col-md-6 has-error">
                            @else
                                <div class="form-group col-md-6">
                            @endif
                                <label for="">Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" name="nome">
                                @if ($errors->has('nome'))
                                    <strong style="color: red">{{ $errors->first('nome') }}</strong>
                                @endif
                            </div>
                            
                            @if ($errors->has('endereco'))
                                <div class="form-group col-md-6 has-error">
                            @else
                                <div class="form-group col-md-6">
                            @endif
                                <label for="">Endereço</label>
                                <input type="text" class="form-control" placeholder="Endereço" name="endereco">
                                @if ($errors->has('endereco'))
                                    <strong style="color: red">{{ $errors->first('endereco') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            @if ($errors->has('bairro'))
                                <div class="form-group col-md-6 has-error">
                            @else
                                <div class="form-group col-md-6">
                            @endif
                                <label for="">Bairro</label>
                                <input type="text" class="form-control" placeholder="Bairro" name="bairro">
                                @if ($errors->has('nome'))
                                    <strong style="color: red">{{ $errors->first('bairro') }}</strong>
                                @endif
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