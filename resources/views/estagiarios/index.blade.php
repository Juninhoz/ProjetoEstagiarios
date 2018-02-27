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
                        <li class="breadcrumb-item active"><a href="#">{{ $model->singular }}</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6" style="text-align: right">
                <button type="button" class="btn btn-primary" style="margin-top: 60px"><i class="glyphicon glyphicon-plus"></i> Estagiario</button>
                <button id="removeModel" type="button" class="btn btn-danger" style="margin-top: 60px" disabled><i class="glyphicon glyphicon-trash"></i> Remover</button>
            </div>
        </div>

        <div class="line"></div>

        <div class="container">
            <table class="table table-bordered" id="users-table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data Contrato</th>
                    <th>Açâo</th>
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
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('estagiarios.data') !!}',
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'nome', name: 'nome'},
                        {data: 'email', name: 'email'},
                        {data: 'telefone', name: 'telefone'},
                        {data: 'data_contrato', name: 'data_contrato'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });

                var table = $('#users-table').DataTable();

                $('#users-table tbody').on('click', 'tr', function () {
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
                console.log('entrou onde queria');
                    $.post("/estagiario/remover/"+idRemove, {"teste":"teste"}, function(data){
                        if(data.sucess != 0){
                            console.log('modelo deletado com sucesso');
                            location.reload(true);
                        } else {
                            console.log('falha ao remover o modelo');
                        }
                    });
            });
        </script>
    @endpush