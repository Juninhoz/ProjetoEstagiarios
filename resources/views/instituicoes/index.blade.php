@extends('layouts.principal')

@section('titulo','Pagina Inicial')

@section('conteudo')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <h2>{{ $model->plural }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Cadastros</a></li>
                        <li class="breadcrumb-item active"><a href="#">{{ $model->singular }}</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6" style="text-align: right">
                <a href="{{ action('InstituicoesController@create') }}"><button type="button" class="btn btn-primary" style="margin-top: 60px"><i class="glyphicon glyphicon-plus"></i> {{ $model->singular}}</button></a>
                <button id="removeModel" type="button" class="btn btn-danger" style="margin-top: 60px" disabled><i class="glyphicon glyphicon-trash"></i> Remover</button>
            </div>
        </div>

        <div class="line"></div>

        <div class="container">
            <table class="table table-bordered" id="setores-table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                </tr>
                </thead>
            </table>
        </div>
        @stop

        @push('scripts')
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var idRemove = '';

            $(function () {
                $('#setores-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('setores.data') !!}',
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'nome', name: 'nome'},
                        {data: 'coordenador.nome', name: 'coordenador.nome'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });

                var table = $('#setores-table').DataTable();

                $('#setores-table tbody').on('click', 'tr', function () {
                    if ( $(this).hasClass('selected') ) {
                        $(this).removeClass('selected');
                        $("#removeModel").attr('disabled', true);
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                        idRemove = $(this).children().html();
                        $("#removeModel").attr('disabled', false);
                        console.log(idRemove);
                    }
                });
            });

            $("#removeModel").click(function(){
                swal({
                    title: 'Você tem certeza?',
                    text: "Essa açâo nâo poderá ser desfeita!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, tenho certeza!'
                }).then((result) => {
                    if (result.value) {
                    $.post("/estagiario/remover/"+idRemove, {"teste":"teste"}, function(data){
                        if(data.sucess != 0){
                            swal(
                                'Registro excluido!',
                                'Registro removido com sucesso.',
                                'success'
                            )
                            location.reload(true);
                        } else {
                            swal(
                                'Falha ao excluir registro!',
                                'Falha ao excluir registro.',
                                'success'
                            )
                        }
                    });
                }
            })

            });
        </script>
    @endpush