<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    protected $table = 'plano';
    public $timestamps = false;

    protected $fillable = [
        'descricao', 'frequencia_pagamento', 'valor'
    ];

    public function relacionaAlunos()
    {
        return $this->hasMany(Aluno::class, 'id_plano');
    }
}
