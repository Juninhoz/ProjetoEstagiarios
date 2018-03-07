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
                        <li class="breadcrumb-item active"><a href="#"></a>Novo</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="line"></div>

        <div class="container-fluid">

            <div class="panel">
                <div class="panel-body">
                    <form action="" method="">
                        <i class="glyphicon glyphicon-user"></i> Novo {{ $model->singular }}
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Nome</label>
                                <input type="text" class="form-control" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Telefone</label>
                                <input type="text" class="form-control" placeholder="Telefone">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>

    </div>

@endsection