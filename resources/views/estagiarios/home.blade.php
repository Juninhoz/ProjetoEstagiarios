@extends('layouts.principal')

@section('titulo','Pagina Inicial')

@section('conteudo')

<!-- Panel -->
<div class="panel panel-default">
  <div class="panel-heading">Bem vindo Ao Sistema gerenciador de Estagiarios.</div>
    <div class="panel-body">

    @foreach($mensagem as $key => $value)    

    @if($value['notificacao'] == null)
          
    @else
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Aviso!</strong> {{ $value['notificacao']}}
        </div>
    @endif

    @endforeach
    
    </div>
</div>

<h3>Lista de Estagiarios</h3>

@foreach($estagiarios as $estagiario)
<div class="panel panel-default">
    
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$estagiario->id}}">{{$estagiario->nome_estagiario}}</a>
        </h4>
    </div>
    <div id="collapse{{$estagiario->id}}" class="collapse">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <label>Email</label>
                                <div class='input-group date'>
                                    <input type='text' class="form-control" value="{{ $estagiario->email_estagiario }}" disabled/>
                                        <span style="cursor:pointer" class="input-group-addon" data-toggle="modal" data-nome="{{ $estagiario->email_estagiario }}" data-target="#exampleModal" data-whatever="@getbootstrap">
                                                <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                </div>
                        </div>
                    </div>
                    <div class='col-sm-2'>
                        <div class="form-group">
                            <label>Telefone</label>
                                <div class='input-group date'>
                                    <input type='text' class="form-control" value="{{ $estagiario->telefone}}" disabled/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-earphone"></span>
                                        </span>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-sm-2'>
                        <div class="form-group">
                            <label>Data Contrato</label>
                                <div class='input-group date'>
                                    <input type='text' class="form-control" value="{{ $estagiario->data_contrato }}" disabled/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                        </div>
                    </div>
                    <div class='col-sm-2'>
                        <div class="form-group">
                            <label>Primeira renovação</label>
                                <div class='input-group date' id='datetimepicker2'>
                                    <input type='text' class="form-control" value="{{ $estagiario->pri_renovacao }}" disabled/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                        </div>
                    </div>
                <div class='col-sm-2'>
                    <div class="form-group">
                        <label>Segunda renovação</label>
                            <div class='input-group date' id='datetimepicker2'>
                                <input type='text' class="form-control" value="{{ $estagiario->seg_renovacao }}" disabled/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                </div>
                <div class='col-sm-2'>
                    <div class="form-group">
                        <label>Terceira renovação</label>
                            <div class='input-group date' id='datetimepicker2'>
                                <input type='text' class="form-control" value="{{ $estagiario->ter_renovacao }}" disabled/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-sm-2'>
                        <div class="form-group">
                            <a href="/estagiario/alterardados/{{$estagiario->id}}"><button type="button" class="btn btn-warning">Alterar dados</button></a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endforeach

<!-- Modal -->
<div class="modal fade" class="exampleModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Novo Email</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">De:</label>
            <input type="text" class="form-control" id="emailTeste" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Para:</label>
            <input type="text" class="form-control" id="teste1" disabled>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Mensagem:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Enviar Email</button>
      </div>
    </div>
  </div>
</div>

<script src="/js/estagiarios-bootstrap.js"></script>

@endsection