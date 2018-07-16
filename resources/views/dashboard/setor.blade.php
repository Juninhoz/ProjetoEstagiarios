@extends('layouts.principal')

@section('titulo','Dashboard')

@section('conteudo')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <h2>Dashboard</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="#"></a>{{ $setor->nome }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6" style="text-align: right">

            </div>
        </div>

        <div class="line"></div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">Coordenador</div>

                        <div class="panel-body">

                            <div class="container-fluid">

                                <div class="row">

                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail" style="margin-top: 28%">
                                                <img src="http://estagiarios.laravel/images/user.png" alt="...">
                                            </a>
                                        </div>

                                        <label>Nome</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control"
                                                   value="{{ $setor->coordenador->nome }}"
                                                   disabled="">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                        </div>

                                        <label>Email</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control"
                                                   value="{{ $setor->coordenador->email }}" disabled="">
                                            <span style="cursor:pointer" class="input-group-addon" data-toggle="modal"
                                                  data-nome="" data-target="#exampleModal"
                                                  data-whatever="@getbootstrap">
                                                <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading">Estagiários</div>
                    <div class="panel-body">
                        <div class="row">
                            @foreach($estagiarios as $estagiario)
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"></div>

                                    <div class="panel-body">

                                        <div class="container-fluid">

                                            <div class="row">

                                                    <div class="form-group">

                                                        <div class="col-md-3">
                                                            <a href="#" class="thumbnail" style="margin-top: 28%">
                                                                <img src="http://estagiarios.laravel/images/user.png"
                                                                     alt="...">
                                                            </a>
                                                        </div>

                                                        <label>Nome</label>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control"
                                                                   value="{{ $estagiario->nome }}"
                                                                   disabled="">
                                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                                        </div>

                                                        <label>Email</label>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control"
                                                                   value="{{ $estagiario->email }}" disabled="">
                                                            <span style="cursor:pointer" class="input-group-addon"
                                                                  data-toggle="modal"
                                                                  data-nome="" data-target="#exampleModal"
                                                                  data-whatever="@getbootstrap">
                                                <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                                        </div>
                                                        <label for="">Telefone</label>
                                                        <div class="input-group date col-md-offset-3 col-md-5">
                                                            <input type="text" class="form-control phone"
                                                                   value="{{ $estagiario->telefone }}" disabled="">
                                                            <span style="cursor:pointer" class="input-group-addon"
                                                                  data-toggle="modal"
                                                                  data-nome="" data-target="#exampleModal"
                                                                  data-whatever="@getbootstrap">
                                                <span class="glyphicon glyphicon-phone-alt"></span>
                                        </span>
                                                        </div>
                                                    </div>


                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
@stop

@push('scripts')
    <script>


    </script>
@endpush