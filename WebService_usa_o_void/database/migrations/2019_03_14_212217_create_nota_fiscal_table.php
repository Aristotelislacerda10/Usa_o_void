<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaFiscalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_fiscal', function (Blueprint $table) {
            $table->increments('id_nf');
            $table->integer('numero_nf');
            $table->string('bc_icms_nf')->nullable($value = true);
            $table->string('valor_icms_nf')->nullable($value = true);
            $table->string('base_subs_nf')->nullable($value = true);
            $table->decimal('valor_subs_nf')->nullable($value = true);
            $table->decimal('valor_total_prod_nf');
            $table->decimal('valor_frete_nf')->nullable($value = true);
            $table->decimal('valor_seguro_nf')->nullable($value = true);
            $table->decimal('outras_despesas_nf')->nullable($value = true);
            $table->decimal('valor_ipi_nf')->nullable($value = true);
            $table->decimal('valor_total_nf');
            $table->string('inf_complementar')->nullable($value = true);
            $table->string('nf_cancelada')->nullable($value = true);
            $table->string('frete_nf');
            $table->string('status_nf');
            $table->integer('cod_venda')->nullable($value = true);
            $table->integer('serie_nf');
            $table->string('tipo_nf')->nullable($value = true);
            $table->string('finalidade_nf')->nullable($value = true);
            $table->string('codificacao_fiscal');
            $table->bigInteger('chave_acesso_nf');
            $table->integer('protocolo_nf');
            $table->string('status_retorno')->nullable($value = true);
            $table->string('msg_rejeicao')->nullable($value = true);
            $table->integer('cfop');
            $table->string('xml_nf')->nullable($value = true);
            $table->string('ambiente')->nullable($value = true);
            $table->integer('cod_cli')->unsigned()->nullable($value = true);
            $table->foreign('cod_cli')->references('id')->on('clientes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_fiscal');
    }
}
