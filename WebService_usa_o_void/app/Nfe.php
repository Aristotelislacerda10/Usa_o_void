<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nfe extends Model
{
    protected $table = 'nota_fiscal';
    protected $fillable = [

        'id_nf','numero_nf', 'bc_icms_nf', 'valor_icms_nf','base_subs_nf','valor_subs_nf','valor_total_prod_nf',
        'valor_frete_nf','valor_seguro_nf','outras_despesas_nf','valor_ipi_nf','valor_total_nf','inf_complementar','nf_cancelada',
        'frete_nf','status_nf','cod_venda','serie_nf','tipo_nf','finalidade_nf','codificacao_fiscal','chave_acesso_nf','protocolo_nf',
        'status_retorno','msg_rejeicao','cfop','xml_nf','ambiente','cod_cli'
    ];



    public function cliente_nota(){

        return $this->belongsTo(Cliente::class,'cod_cli');
    }
}
