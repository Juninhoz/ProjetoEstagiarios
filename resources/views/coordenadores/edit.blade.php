@extends('layouts.principal')

@section('titulo', 'Coordenadores')

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
                        <li class="breadcrumb-item active"><a href="#"></a>Editar</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="line"></div>

        <div class="container-fluid">
            <div class="panel">
                <div class="panel-body">
                    <form action="{{ action('CoordenadoresController@store') }}" method="post">
                        {{ csrf_field() }}
                        <i class="glyphicon glyphicon-user"></i> Editar {{ $model->singular }}
                        <hr>
                        <div class="row">
                            @if ($errors->has('nome'))
                                <div class="form-group col-md-6 has-error">
                                    @else
                                        <div class="form-group col-md-6">
                                            @endif
                                            <label for="">Nome</label>
                                            <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $coordenador->nome }}">
                                            @if ($errors->has('nome'))
                                                <strong style="color: red">{{ $errors->first('nome') }}</strong>
                                            @endif
                                        </div>
                                        @if ($errors->has('email'))
                                            <div class="form-group col-md-6 has-error">
                                                @else
                                                    <div class="form-group col-md-6">
                                                        @endif
                                            <label for="">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $coordenador->email }}">
                                            @if ($errors->has('email'))
                                                <strong style="color: red">{{ $errors->first('email') }}</strong>
                                            @endif
                                        </div>
                                </div>
                                <br>
                                <div class="row">
                                    @if ($errors->has('telefone'))
                                        <div class="col-md-3 has-error">
                                            @else
                                                <div class="col-md-3 ">
                                                    @endif
                                                    <label for="">Telefone</label>
                                                    <input type="text" name="telefone" class="form-control"
                                                           placeholder="Telefone" value="{{ $coordenador->telefone }}">
                                                    @if ($errors->has('telefone'))
                                                        <strong style="color: red">{{ $errors->first('telefone') }}</strong>
                                                    @endif
                                                </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="form-group col-md-2 col-md-offset-5" style="margin-top: 10px">
                                                <button class="btn btn-primary" type="submit"><i
                                                            class="glyphicon glyphicon-floppy-save"></i> Alterar
                                                </button>
                                                <button class="btn btn-warning" type="reset"><i
                                                            class="glyphicon glyphicon-remove"></i>
                                                    Limpar
                                                </button>
                                            </div>
                                        </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection

@push('scripts')
<script>
</script>
@endpush