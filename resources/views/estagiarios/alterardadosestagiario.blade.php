@extends('layouts.principal')

@section('titulo','Cadastro')

@section('conteudo')

<div class="col-md-12">
    <form action="/estagiario/alterardados/{{$estagiario->id}}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="id_status" value="1"/>
            <legend>Alterar Dados</legend> 
                <div class="form-group">        
                    <label>Nome:</label>
                    <input name="nome_estagiario" class="form-control" value="{{ $estagiario->nome_estagiario }}"/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">        
                            <label>Email:</label>
                            <input name="email_estagiario" class="form-control" value="{{ $estagiario->email_estagiario }}"/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">       
                            <label>Telefone:</label>
                            <input name="telefone" class="form-control" value="{{ $estagiario->telefone }}"/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">        
                            <label>Data do Contrato:</label>
                            <input type="date" name="data_contrato" id="dataContrato" class="form-control" value="{{ $estagiario->data_contrato }}"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">        
                            <label>Horario:</label>     
                                <select name="id_horario" class="form-control"/>
                                @foreach($horarios as $horario)
                                    <option value="{{ $horario->id }}">{{ $horario->descricao_horario }}</option>                                
                                @endforeach
                                </select>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Alterar</button>
                        <input type="reset" class="btn btn-default" value="Limpar"/>
                    </div>
                </div>
            </div>
    </form>
</div>
@endsection