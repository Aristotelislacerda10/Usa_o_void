<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $fillable = [

        'cod_pro','cod_ean1', 'cod_ean2', 'descricao_pro','tipo_emb','cfop_venda','ncm',
        'cest','qtd_estoque','valor_venda','valor_custo','reducao_bc_icms','cst_ipi','aliquota_ipi',
        'fcp','id_cst','id_for'

    ];
}
