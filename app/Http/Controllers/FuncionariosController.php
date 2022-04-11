<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', ['funcionarios'=>$funcionarios]);
    }

    //Criar usuario
    public function create()
    {
        return view('funcionarios.create');
    }
    public function store(Request $request)
    {
        Funcionario::create($request->all());
        return redirect()->route('funcionarios-index')->with('mensagem', 'Funcionário cadastrado com sucesso!');
    }

    //Atualizar dados do funcionário
    public function edit($id)
    {
        $funcionarios = Funcionario::where('id', $id)->first();
        if(!empty($funcionarios))
        {
            return view('funcionarios.edit', ['funcionarios'=>$funcionarios]);
        }
        else
        {
            return redirect()->route('funcionarios-index');
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
            'cargo' => $request->cargo,
            'salario' => $request->salario,
        ];
        Funcionario::where('id',$id)->update($data);
        return redirect()->route('funcionarios-index')->with('mensagem', 'Dados alterados com sucesso!');
    }

    //Deletar o funcionário
    public function destroy($id)
    {
        Funcionario::where('id',$id)->delete();
        return redirect()->route('funcionarios-index')->with('mensagem', 'Funcionário excluido com sucesso!');
    }

}
