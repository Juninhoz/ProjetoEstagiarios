@extends('layouts.principal')

@section('titulo','Pagina Inicial')

@section('conteudo')

<div class="container-fluid">

    <h2>Estagiarios</h2>

    <div class="line"></div>

    <div class="container">
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data Contrato</th>
        </tr>
        </thead>
    </table>
    </div>
@stop

    @push('scripts')
        <script>
            $(function() {
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('estagiarios.data') !!}',
                    columns: [
                        { data: 'nome', name: 'nome' },
                        { data: 'email', name: 'email' },
                        { data: 'telefone', name: 'telefone' },
                        { data: 'data_contrato', name: 'data_contrato' },
                    ]
                });
            });
        </script>
    @endpush