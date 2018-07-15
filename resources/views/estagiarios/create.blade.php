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
                    <li class="breadcrumb-item"><a href="{{ route('estagiario.index') }}">{{ $model->singular }}</a></li>
                    <li class="breadcrumb-item active"><a href="#"></a>Novo</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="line"></div>
    <div class="container-fluid">
        <div class="panel">
            <div class="panel-body">
            <form action="{{ action('EstagiariosController@store')}}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                   <input type="hidden" name="status_id" value="1"/>
                   <i class="glyphicon glyphicon-user"></i> Novo {{ $model->singular }}
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <div id="imagemPreview">
                                <img src="{{ URL::to('/') }}/images/user.png" height="250" width="250" style="margin-left: 15%;" id="imgPreview">
                            </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-3">
                                 <div class="input-group">   
                                        <label>Imagem</label>
                                        <input type="file" id="imagem" name="imagem">
                                </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        @if($errors->has('nome'))
                            <div class="form-group col-md-4 has-error">
                        @else
                            <div class="form-group col-md-4">
                        @endif
                            <label for="">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome" name="nome" value="{{ old('nome') }}">
                            @if($errors->has('nome'))
                                <strong style="color: red">{{ $errors->first('nome') }}</strong>
                            @endif
                        </div>
                        @if($errors->has('email'))
                            <div class="form-group col-md-4 has-error">
                        @else
                            <div class="form-group col-md-4">
                        @endif
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <strong style="color: red">{{ $errors->first('email') }}</strong>
                            @endif
                        </div>
                        <div class="col-md-4">
                                <label for="">Setor</label>
                                <select name="setor_id" class="form-control">
                                        @foreach($setores as $setor)
                                            <option value="{{ $setor->id }}">{{ $setor->nome }}</option>
                                        @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-4">
                                    <label for="">Horario</label>
                                    <select name="horario_id" class="form-control">
                                            @foreach($horarios as $horario)
                                                <option value="{{ $horario->id }}">{{ $horario->descricao }}</option>
                                            @endforeach
                                    </select>
                            </div>
                            @if($errors->has('instituicao_id'))
                                <div class="form-group col-md-4 has-error">
                             @else
                                <div class="form-group col-md-4">
                            @endif
                                <label for="">Instituição</label>
                                <select name="instituicao_id" class="form-control" id="instituicao">
                                    <option>Selecione a Instituicao</option>
                                @foreach($instituicoes as $instituicao)
                                    <option value="{{ $instituicao->id }}">{{ $instituicao->nome }}</option>
                                @endforeach
                                </select>
                                @if($errors->has('instituicao_id'))
                                    <strong style="color: red">Selecione uma Instituição.</strong>
                                @endif
                            </div>
                            @if($errors->has('curso_id'))
                            <div class="form-group col-md-4 has-error" id="divCurso">
                         @else
                            <div class="form-group col-md-4" id="divCurso">
                        @endif
                            <label for="">Curso</label>
                            <select name="curso_id" class="form-control" id="CmbCursos">
                                <option>Selecione o Curso</option>
                            </select>
                            @if($errors->has('curso_id'))
                                    <strong style="color: red">Selecione um Curso.</strong>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        @if($errors->has('telefone'))
                            <div class="form-group col-md-4 has-error">
                        @else
                            <div class="form-group col-md-4">
                        @endif
                            <label for="">Telefone</label>
                            <input type="text" class="form-control phone" placeholder="Telefone" name="telefone" value="{{ old('telefone') }}">
                            @if($errors->has('telefone'))
                        <strong style="color: red">{{ $errors->first('telefone')}}</strong>
                            @endif
                        </div>
                        @if($errors->has('data_contrato'))
                            <div class="form-group col-md-4 has-error">
                        @else
                            <div class="form-group col-md-4">
                        @endif
                            <label for="">Data Contrato</label>
                            <input type="date" class="form-control" placeholder="Data contrato" name="data_contrato" value="{{ old('data_contrato') }}">
                            @if($errors->has('telefone'))
                        <strong style="color: red">{{ $errors->first('data_contrato')}}</strong>
                            @endif
                        </div>
                    </div>
                        <div class="row">
                            <br>
                            <div class="form-group col-md-2 col-md-offset-5" style="margin-top: 10px">
                                <button class="btn btn-primary" type="submit">
                                    <i class="glyphicon glyphicon-floppy-save"></i> Cadastrar
                                </button>
                                <button class="btn btn-warning" type="reset">
                                    <i class="glyphicon glyphicon-remove"></i> Limpar
                                </button>
                            </div>
                        </div>
                </form>>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@push('scripts')
<script>

    $('select#instituicao').on("change", function(){
        swal({
            title: 'Carregando!',
            timer: 500,
            onOpen: () => {
                swal.showLoading()
            }
        });
        var idCurso = $(this).val();
        $('#CmbCursos').empty().append('<option>Selecione o Curso</option>');
        $.ajax({
            url: "/teste/"+idCurso,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                var cursos = JSON.parse(data);
                $('#divCurso').removeClass('has-error');
                if(cursos.length > 0){
                    var option = 'Selecione o Curso';
                    var i = 0;
                    $.each(cursos, function(i, obj){
				        option += '<option value="'+obj.id+'">'+obj.nome+'</option>';
                    });
                    $('#CmbCursos').html(option).show();
                } else {
                    $('#divCurso').addClass('has-error');
                    $('#CmbCursos').empty().append('<option>Nenhum Curso Encontrado</option>');
                }
            },
        });
    });
    
</script>

@endpush