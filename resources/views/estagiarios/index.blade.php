@extends('layouts.principal')

@section('titulo','Estagiarios')

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
                <a href="{{ action('EstagiariosController@create') }}">
                    <button type="button" class="btn btn-primary" style="margin-top: 60px"><i class="glyphicon glyphicon-plus"></i> Estagiario</button>
                </a>
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
                    <th>Setor</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data Contrato</th>
                    <th>1 renovacao</th>
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
            console.log(idRemove);
            $(function () {
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('estagiarios.data') !!}',
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'nome', name: 'nome'},
                        {data: 'setor.nome', name: 'setor.nome'},
                        {data: 'email', name: 'email'},
                        {data: 'telefone', name: 'telefone'},
                        {data: 'data_contrato', name: 'data_contrato'},
                        {data: 'pri_renovacao', name: 'pri_renovacao'},
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
                    $.post("/estagiarios/destroy/"+idRemove, {"teste":"teste"}, function(data){
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