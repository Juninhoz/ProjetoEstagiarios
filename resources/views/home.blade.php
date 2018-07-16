@extends('layouts.principal')

@section('conteudo')
<div class="container-fluid">
    <div class="row">
        <h2 style="margin-left: 30px">{{ boasVindas() }}, {{ Auth()->user()->name }}</h2>
    </div>


    <div class="line"></div>

    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="glyphicon glyphicon-stats"></i> Quantidade de Estagiarios</h3>
                </div>
                <div class="panel-body" style="text-align: right; font-size: 300%">
                    {{ $quantidade }}
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <a href="{{ url('/renovacoes') }}">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="glyphicon glyphicon-warning-sign"></i> Renovações de Estagiarios</h3>
                </div>
                <div class="panel-body" style="text-align: right; font-size: 300%">
                    {{ $renovacoes['quantidade'] }}
                </div>
            </div>
            </a>
        </div>

        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="glyphicon glyphicon-plane"></i> Ferias</h3>
                </div>
                <div class="panel-body" style="text-align: right; font-size: 300%">
                    0
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <a href="{{ url('/finalizacoes') }}">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="glyphicon glyphicon-remove"></i> Finalizações de Contratos</h3>
                </div>
                <div class="panel-body" style="text-align: right; font-size: 300%">
                  {{ $finalizacoes }}
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <canvas id="myChart" width="400" height="250">

            </canvas>
        </div>
    </div>

</div>

@endsection

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
            }).done(function(data){
            var encore = JSON.parse(data);
            for(var i in encore){
                if(encore[i]['nome']){
                    setores.push(encore[i]['nome']);
                    quantidade.push(encore[i]['qtd']);
                }
            }
            showChart(setores, quantidade);
            });


        function showChart(setores, quantidade){

            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: setores,
                    datasets: [{
                        label: 'Quantidade de Estagiarios',
                        data: quantidade,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        }

    </script>
@endpush