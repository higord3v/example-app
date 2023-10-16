<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'nome',
        'sobrenome',
        'data_nascimento',
        'email',
        'genero'
    ];

    protected $casts = [
        'cpf' => 'string',
        'nome' => 'string',
        'sobrenome' => 'string',
        'data_nascimento' => 'date',
        'email' => 'string',
        'genero' => 'string'
    ];
}
