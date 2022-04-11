<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes'=>$clientes]);
    }

    //Criar cliente
    public function create()
    {
        return view('clientes.create');
    }
    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes-index')->with('mensagem', 'Cliente cadastrado com sucesso!');;
    }

    //Atualizar dados do cliente
    public function edit($id)
    {
        $clientes = Cliente::where('id', $id)->first();
        if(!empty($clientes))
        {
            return view('clientes.edit', ['clientes'=>$clientes]);
        }
        else
        {
            return redirect()->route('clientes-index');
        }
    }
  
    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'email' => $request->email,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'telefone' => $request->telefone,
            'datanasc' => $request->datanasc,
            'cpf' => $request->cpf,

        ];
        Cliente::where('id',$id)->update($data);
        return redirect()->route('clientes-index')->with('mensagem', 'Dados do cliente alterados com sucesso!');
    }

    //Deletar o cliente
    public function destroy($id)
    {
        Cliente::where('id',$id)->delete();
        return redirect()->route('clientes-index')->with('mensagem', 'Cliente excluido com sucesso!');
    }
    

}
