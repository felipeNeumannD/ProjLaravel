<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Pessoa
{
    use HasFactory;

    protected $table = 'funcionario';
    public $timestamps = false;

    protected $fillable = [
        'data_contratacao', 'salario', 'setor', 'funcao', 'id_pessoa'
    ];

    public function relacionaPessoa()
    {
        return $this->belongsTo(Pessoa::class, 'id_pessoa');
    }
}
