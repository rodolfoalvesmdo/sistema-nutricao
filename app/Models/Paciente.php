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
        'convenio',
        'image_path',
        'peso',
        'altura',
        'imc',
        'mm',
        'gordura',
        'lactose',
        'diabetes',
        'hipertensao',
        'cardiaco',
        'exercicio',
        'frequencia',
        'rf_manha',
        'rf_tarde',
        'rf_noite',
        'cafe_manha',
        'lanche_manha',
        'almoco',
        'lanche_tarde',
        'jantar',
        'ceia'
    ];

    public static function buscar($keyword) {
        return static::where('nome', 'like', $keyword . '%')->get();
    }
}
