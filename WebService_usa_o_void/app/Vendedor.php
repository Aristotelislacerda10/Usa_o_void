<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendedor extends Model
{
    protected $table = 'vendedor';
    use SoftDeletes;
    protected $fillable = [

        'nome_ven', 'cpf_ven','vendedor_ativo', 'rg_ven','endereco_ven','numero_end','bairro',
        'ibge','cidade','estado','fone','comicao_avista','comicao_aprazo'

    ];
}
