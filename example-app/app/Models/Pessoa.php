<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'pessoa';
    public $timestamps = false;

    protected $fillable = [
        'nome', 'nascimento_data', 'sexo', 'cpf', 'telefone', 'email'
    ];
}
