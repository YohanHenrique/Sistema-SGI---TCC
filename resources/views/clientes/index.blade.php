@extends('layouts.app')

@section('title','Listar cliente')

@section('content')


@if(Session::has('mensagem'))
    <div class="alert alert-success"> 
        <button type="button" 
            class="close" 
            data-dismiss="alert" 
            aria-hidden="true">&times;</button>
        {!! session()->get('mensagem') !!} 
    </div>
@endif



    <div class="container mt-5">
    <div class="row">
        <div class="sm-10 ">
            <h1>Listagem de clientes</h1>
        </div>
        <div class="com-sm-2">
            <a href="{{ route('clientes-create')}}" class="btn btn-success">Cadastrar cliente</a>
        </div>
    </div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Endereco</th>
        <th scope="col">Cidade</th>
        <th scope="col">Telefone</th>
        <th scope="col">Data-nascimento</th>
        <th scope="col">CPF</th>
        <th scope="col">FUNÇÕES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <th>{{ $cliente->id }}</th>
            <th>{{ $cliente->nome }}</th>
            <th>{{ $cliente->email }}</th>
            <th>{{ $cliente->endereco }}</th>
            <th>{{ $cliente->cidade }}</th>
            <th>{{ $cliente->telefone }}</th>
            <th>{{ $cliente->datanasc }}</th>
            <th>{{ $cliente->cpf }}</th>
            <th class="d-flex">
                <a href="{{ route('clientes-edit', ['id'=>$cliente->id]) }}" class="btn btn-primary me-2">Alterar
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                </a>
                <form action="{{ route('clientes-destroy', ['id'=>$cliente->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </button>
                </form>
            </th>
        </tr>
        @endforeach
    </tbody>
    </table>    
    </div>


@endsection