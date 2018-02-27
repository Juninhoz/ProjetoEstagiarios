@extends('layouts.principal')

@section('conteudo')
<div class="container-fluid">
    <div class="row">
        <h2 style="margin-left: 10px">{{ boasVindas() }}, {{ Auth()->user()->name }}</h2>
    </div>
</div>
@endsection
