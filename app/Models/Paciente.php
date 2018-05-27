<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nome',
        'rg',
        'cpf',
        'telefone',
        'email',
        'endereco',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'convenio'
    ];
}
