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
                    <form action="{{ route('instituicoes.update', ['id' => $instituicao->id]) }}" method="post">
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
                                            <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $instituicao->nome }}">
                                            @if ($errors->has('nome'))
                                                <strong style="color: red">{{ $errors->first('nome') }}</strong>
                                            @endif
                                        </div>
                                        @if ($errors->has('email'))
                                            <div class="form-group col-md-6 has-error">
                                                @else
                                                    <div class="form-group col-md-6">
                                                        @endif
                                            <label for="">Endereço</label>
                                            <input type="text" name="endereco" class="form-control" placeholder="Endereço" value="{{ $instituicao->endereco }}">
                                            @if ($errors->has('endereco'))
                                                <strong style="color: red">{{ $errors->first('bairro') }}</strong>
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
                                                    <label for="">Bairro</label>
                                                    <input type="text" name="bairro" class="form-control"
                                                           placeholder="Bairro" value="{{ $instituicao->bairro }}">
                                                    @if ($errors->has('bairro'))
                                                        <strong style="color: red">{{ $errors->first('Bairro') }}</strong>
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