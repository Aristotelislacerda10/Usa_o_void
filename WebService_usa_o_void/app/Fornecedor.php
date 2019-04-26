<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedor';
    protected $fillable = [

        'fisica_juridica','nome_for', 'cnpj_for', 'insc_estadual','cep_for','endereco_for','numero_end',
        'bairro','ibge','cidade','estado','fone','email','indicador_ie','cliente_ativo'

    ];
}
