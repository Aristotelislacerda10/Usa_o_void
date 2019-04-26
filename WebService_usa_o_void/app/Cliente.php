<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cliente extends Model
{
    use SoftDeletes;
    protected $fillable = [

        'fisica_juridica','nome_cli', 'cnpj_cli', 'insc_estadual','cep_cli','endereco_cli','numero_end',
    'bairro','ibge','cidade','estado','fone','email','indicador_ie','cliente_ativo'

    ];
}


