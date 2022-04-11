@extends('layouts.app')

@section('title','Cadastro de funcionário')

@section('content')
<div id=conteudo>
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastrar funcionário</h1>
        <form action="{{ route('funcionarios-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="nome completo..." maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email..." maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="rua..." maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade..." maxlength="50"  required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="number" class="form-control" id="telefone" name="telefone" placeholder="telefone..." maxlength="11"  required>
            </div>
            <div class="form-group">
                <label for="datanasc">Data - Nascimento</label>
                <input type="date" class="form-control" id="datanasc" name="datanasc" placeholder="data de nascimento..." maxlength="50"  required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="cpf..." maxlength="11"  required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <select class="browser-default custom-select custom-select-lg mb-3" type="text" name="cargo" required pattern="[1-4]">
                              <option selected hidden disabled="disabled" selected="selected" value="0">ESCOLHA UM CARGO</option>
                                        <option value="Gerente">GERENTE</option>
                                        <option value="Caixa">CAIXA</option>
                                        <option value="Atendente">ATENDENTE</option>
                                        <option value="Vendedor">VENDEDOR</option>
                </select>
            </div>
            <div class="form-group">
                <label for="salario">Salário</label>
                <input type="text" class="form-control" id="salario" name="salario" placeholder="salario..." required>
            </div>
            <input type="submit" class="btn btn-primary" value="cadastrar funcionário">
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

$(function(){
  var regex = new RegExp('[^ a-zA-Zàèìòùáéíóúâêîôûãõ\b]', 'g');
  // repare a flag "g" de global, para substituir todas as ocorrências
  $(cargo).on('input', function(){
    $(this).val($(this).val().replace(regex, ''));
  });
})
  
</script>

@endsection
