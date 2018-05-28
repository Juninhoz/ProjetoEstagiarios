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
                    <li class="breadcrumb-item"><a href="{{ route('curso.index') }}">{{ $model->singular }}</a></li>
                        <li class="breadcrumb-item active"><a href="#"></a>Editar</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="line"></div>

        <div class="container-fluid">

            <div class="panel">
                <div class="panel-body">
                    <form action="{{ action('CursosController@update', $curso->id) }}" method="post">
                            {{ csrf_field() }}
                        <i class="glyphicon glyphicon-home"></i> Editar {{ $model->singular }}
                        <hr>
                        <div class="row">
                            @if ($errors->has('nome'))
                                <div class="form-group col-md-6 has-error">
                            @else
                                <div class="form-group col-md-6">
                            @endif
                                <label for="instituicao">Instituição</label>
                                <select name="instituicao_id" class="form-control">
                                    @foreach($instituicoes as $instituicao)
                                        <option value="{{ $instituicao->id }}">{{ $instituicao->nome }} </option>
                                    @endforeach    
                                </select>
                                @if ($errors->has('instituicao'))
                                    <strong style="color: red">{{ $errors->first('instituicao') }}</strong>
                                @endif
                            </div>
                            
                            @if ($errors->has('nome'))
                                <div class="form-group col-md-6 has-error">
                            @else
                                <div class="form-group col-md-6">
                            @endif
                                <label for="">Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" value="{{ $curso->nome }}">
                                @if ($errors->has('nome'))
                                    <strong style="color: red">{{ $errors->first('nome') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            @if ($errors->has('horario'))
                                <div class="form-group col-md-6 has-error">
                            @else
                                <div class="form-group col-md-6">
                            @endif
                                <label for="">Horario</label>
                                <select name="horario" class="form-control">
                                        <option value="Matutino">Matutino</option>
                                        <option value="Vespertino">Vespertino</option>
                                        <option value="Noturno">Noturno</option>
                                </select>
                                @if ($errors->has('horario'))
                                    <strong style="color: red">{{ $errors->first('horario') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-md-2 col-md-offset-5" style="margin-top: 10px">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="glyphicon glyphicon-floppy-save"></i> Salvar
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