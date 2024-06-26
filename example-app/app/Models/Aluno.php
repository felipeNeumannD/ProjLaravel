<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Pessoa
{
    use HasFactory;

    protected $table = 'aluno';
    public $timestamps = false;

    protected $fillable = [
        'data_inicio', 'forma_pagamento', 'id_plano', 'id_pessoa'
    ];

    public function relacionaPessoa()
    {
        return $this->belongsTo(Pessoa::class, 'id_pessoa');
    }

    public function relacionaPlano()
    {
        return $this->belongsTo(Plano::class, 'id_plano');
    }
}
