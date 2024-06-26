<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $table = 'equipamento';
    public $timestamps = false;

    protected $fillable = [
        'descricao', 'tipo', 'data_compra', 'valor'
    ];
}
