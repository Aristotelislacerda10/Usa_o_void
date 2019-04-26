<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedor';
    protected $fillable = [

        'nome_ven', 'cpf_ven','vendedor_ativo', 'rg_ven','endereco_ven','numero_end','bairro',
        'ibge','cidade','estado','fone','comicao_avista','comicao_aprazo'

    ];
}
