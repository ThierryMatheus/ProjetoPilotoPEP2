<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'nome_fantasia',
        'tipo',
        'cnpj',
        'email',
        'senha'

    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];
}
