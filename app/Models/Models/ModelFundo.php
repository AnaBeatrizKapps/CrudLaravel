<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFundo extends Model
{
    use HasFactory;
    protected $table='fundo';
    protected $primaryKey = 'codigo_fundo';
    protected $fillable=['nome_fundo','qtd_integrantes','data_hora_cadastro','status'];
}
