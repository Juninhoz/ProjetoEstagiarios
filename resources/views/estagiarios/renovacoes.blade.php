@extends('layouts.principal')

@section('titulo','Renovações')

@section('conteudo')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <h2>Renovações</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">Renovações</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="line"></div>

        <div class="row">


            @foreach($renovacoes as $renovacao)

                <div class="col-md-4">
                    @if($renovacao->renovacao == 1)
                        <div class="panel panel-info">
                            <div class="panel-heading">1º Renovação</div>
                            @elseif($renovacao->renovacao == 2)
                                <div class="panel panel-warning">
                                    <div class="panel-heading">2º Renovação</div>
                                    @elseif($renovacao->renovacao == 3)
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">3º Renovação</div>
                                            @endif

                                            <div class="panel-body">

                                                <div class="container-fluid">

                                                    <div class="row">

                                                        <div class="form-group">

                                                            <div class="col-md-3" style="margin-top: 5%">
                                                                <a href="#" class="thumbnail">
                                                                    @if(strlen($renovacao->imagem) < 17)
                                                                    <img src="{{ URL::to('/') }}/images/user.png"
                                                                         alt="...">
                                                                         @else
                                                                         <img src="{{ $renovacao->imagem }}"
                                                                         alt="...">
                                                                         @endif
                                                                </a>
                                                            </div>

                                                            <label>Nome</label>
                                                            <div class='input-group date'>
                                                                <input type='text' class="form-control"
                                                                       value="{{ $renovacao->nome }}" disabled/>
                                                                <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                                            </div>

                                                            <label>Email</label>
                                                            <div class='input-group date'>
                                                                <input type='text' class="form-control"
                                                                       value="{{ $renovacao->email }}" disabled/>
                                                                <span style="cursor:pointer" class="input-group-addon"
                                                                      data-toggle="modal"
                                                                      data-nome="" data-target="#exampleModal"
                                                                      data-whatever="@getbootstrap">
                                                <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                                            </div>

                                                            <br>

                                                            <div class='col-sm-5'>
                                                                <div class="form-group">
                                                                    <label>Primeira renovação </label>
                                                                    @if($renovacao->renovacao == 1)
                                                                        <i class="glyphicon glyphicon-info-sign"
                                                                           style="color: green"></i>
                                                                        <div class='input-group date has-success'
                                                                             id='datetimepicker2'>
                                                                            @else
                                                                                <div class='input-group date'
                                                                                     id='datetimepicker2'>
                                                                                    @endif

                                                                                    <input type='text'
                                                                                           class="form-control"
                                                                                           value="{{ $renovacao->pri_renovacao }}"
                                                                                           disabled/>
                                                                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                                                                </div>
                                                                        </div>
                                                                </div>

                                                                <div class='col-sm-5'>
                                                                    <div class="form-group">
                                                                        <label>Segunda renovação</label>
                                                                        @if($renovacao->renovacao == 2)
                                                                            <i class="glyphicon glyphicon-info-sign"
                                                                               style="color: green"></i>
                                                                            <div class='input-group date has-success'
                                                                                 id='datetimepicker2'>
                                                                                @else
                                                                                    <div class='input-group date'
                                                                                         id='datetimepicker2'>
                                                                                        @endif
                                                                            <input type='text' class="form-control"
                                                                                   value="{{ doBancoData($renovacao->seg_renovacao) }}"
                                                                                   disabled/>
                                                                            <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class='col-sm-5'>
                                                                    <div class="form-group">
                                                                        <label>Terceira renovação</label>
                                                                        @if($renovacao->renovacao == 3)
                                                                            <i class="glyphicon glyphicon-info-sign"
                                                                               style="color: green"></i>
                                                                            <div class='input-group date has-success'
                                                                                 id='datetimepicker2'>
                                                                                @else
                                                                                    <div class='input-group date'
                                                                                         id='datetimepicker2'>
                                                                                        @endif
                                                                            <input type='text' class="form-control"
                                                                                   value="{{ doBancoData($renovacao->ter_renovacao) }}"
                                                                                   disabled/>
                                                                            <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                                                        </div>
                                                                    </div>
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
                @stop


                @push('scripts')
                    <script>

                    </script>
    @endpush