<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
      'nome',
      'email',
      'endereco',
      'cidade',
      'telefone',
      'datanasc', 
      'cpf',
      'cargo', 
      'salario',
    ];
}
