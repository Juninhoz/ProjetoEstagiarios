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
                    </ol>
                </nav>
            </div>
            <div class="col-md-6" style="text-align: right">

            </div>
        </div>

        <div class="line"></div>

        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-offset-4">
                    <div class="panel panel-info">
                        <div class="panel-heading" style="text-align: right">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="glyphicon glyphicon-home"></i>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="panel-title"> Setores </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($setores as $setor)

                    <div class="col-md-3">
                        <a href="{{ url('/dashboard/setor', $setor->id) }}">
                            <div class="panel panel-success">
                                <div class="panel-heading" style="text-align: right">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="glyphicon glyphicon-home"></i>
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="panel-title"> {{ $setor->nome }}</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach
            </div>
            <br>
            <div class="row">
                <div class="col-md-8" style="text-align: center">
                    <h4>Quantidade de Estágiarios por Setor</h4>
                    <canvas id="myChart"></canvas>
                </div>


            </div>
        </div>
    </div>
@stop

@push('scripts')
    <script>

        let setores = [];
        let quantidade = [];
        $.ajax({
            url: "/setores/getsetores",
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                // this.encore = JSON.parse(data);
            }
        }).done(function (data) {
            var encore = JSON.parse(data);
            for (var i in encore) {
                if (encore[i]['nome']) {
                    setores.push(encore[i]['nome']);
                    quantidade.push(encore[i]['qtd']);
                }
            }
            showChart(setores, quantidade);
        });

        function showChart(setores, quantidade) {

            var ctx = document.getElementById('myChart').getContext('2d');

            data = {
                datasets: [{
                    data: quantidade,
                    backgroundColor: [
                        "#2ecc71",
                        "#3498db",
                        "#95a5a6",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e"
                    ],
                }],
                labels: setores,
            };

            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],

            });
        }


    </script>
@endpush