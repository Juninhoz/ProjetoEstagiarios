@extends('layouts.principal')

@section('titulo','Renovações')

@section('conteudo')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <h2>Finalizações</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">Finalizações</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="line"></div>

        <div class="row">

            @foreach($estagiarios as $estagiario)

                <div class="col-md-4">
                    
                        <div class="panel panel-danger">
                            <div class="panel-heading"><i class="glyphicon glyphicon-user"></i></div>
                                            <div class="panel-body">

                                                <div class="container-fluid">

                                                    <div class="row">

                                                        <div class="form-group">

                                                                <div class="col-md-3" style="margin-top: 5%">
                                                                        <a href="#" class="thumbnail">
                                                                            @if(strlen($estagiario->imagem) < 17)
                                                                            <img src="{{ URL::to('/') }}/images/user.png"
                                                                                 alt="...">
                                                                                 @else
                                                                                 <img src="{{ $estagiario->imagem }}"
                                                                                 alt="...">
                                                                                 @endif
                                                                        </a>
                                                                    </div>

                                                            <label>Nome</label>
                                                            <div class='input-group date'>
                                                                <input type='text' class="form-control"
                                                                       value="{{ $estagiario->nome }}" disabled/>
                                                                <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                                            </div>

                                                            <label>Email</label>
                                                            <div class='input-group date'>
                                                                <input type='text' class="form-control"
                                                                       value="{{ $estagiario->email }}" disabled/>
                                                                <span style="cursor:pointer" class="input-group-addon"
                                                                      data-toggle="modal"
                                                                      data-nome="" data-target="#exampleModal"
                                                                      data-whatever="@getbootstrap">
                                                <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                                            </div>

                                                    <br>
                                                                <div class="col-md-offset-3">
                                                                    
                                                                        <label>Finalização Contrato</label>
                                
                                                                                    <div class='input-group date'
                                                                                         id='datetimepicker2'>
                                                                                       
                                                                            <input type='text' class="form-control"
                                                                                   value="{{ doBancoData($estagiario->fim_contrato) }}"
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