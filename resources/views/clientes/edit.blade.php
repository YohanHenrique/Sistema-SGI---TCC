@extends('layouts.app')

@section('title','Edição de cliente')

@section('content')
<div id=conteudo>
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Edição de dados de cliente</h1>
        <form action="{{ route('clientes-update',['id'=>$clientes->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $clientes->nome }}" maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $clientes->email }}" maxlength="50"  required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $clientes->endereco }}" maxlength="50"  required>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $clientes->cidade }}" maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $clientes->telefone }}" maxlength="11" required>
            </div>
            <div class="form-group">
                <label for="datanasc">Data - Nascimento</label>
                <input type="date" class="form-control" id="datanasc" name="datanasc" value="{{ $clientes->datanasc }}" maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $clientes->cpf }}" maxlength="11" required>
            </div>
            <input type="submit" class="btn btn-success" value="Atualizar">
        </form>
    </div>
</div>


<script>
        $(function(){
  var regex = new RegExp('[^ a-zA-Zàèìòùáéíóúâêîôûãõ\b]', 'g');
  // repare a flag "g" de global, para substituir todas as ocorrências
  $(nome).on('input', function(){
    $(this).val($(this).val().replace(regex, ''));
  });
})

$(function(){
  var regex = new RegExp('[^ 0-9a-zA-Zàèìòùáéíóúâêîôûãõç\b@.]', 'g');
  // repare a flag "g" de global, para substituir todas as ocorrências
  $(email).on('input', function(){
    $(this).val($(this).val().replace(regex, ''));
  });
})

$(function(){
  var regex = new RegExp('[^ 0-9a-zA-Zàèìòùáéíóúâêîôûãõç\b]', 'g');
  // repare a flag "g" de global, para substituir todas as ocorrências
  $(endereco).on('input', function(){
    $(this).val($(this).val().replace(regex, ''));
  });
})

$(function(){
  var regex = new RegExp('[^ a-zA-Zàèìòùáéíóúâêîôûãõ\b]', 'g');
  // repare a flag "g" de global, para substituir todas as ocorrências
  $(cidade).on('input', function(){
    $(this).val($(this).val().replace(regex, ''));
  });
})

$(function(){
  var regex = new RegExp('[^ 0-9\b]', 'g');
  // repare a flag "g" de global, para substituir todas as ocorrências
  $(telefone).on('input', function(){
    $(this).val($(this).val().replace(regex, ''));
  });
})


$(function(){
  var regex = new RegExp('[^ 0-9\b]', 'g');
  // repare a flag "g" de global, para substituir todas as ocorrências
  $(cpf).on('input', function(){
    $(this).val($(this).val().replace(regex, ''));
  });
})
  
</script>

@endsection