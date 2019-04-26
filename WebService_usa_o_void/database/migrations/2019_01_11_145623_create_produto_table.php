<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('cod_pro');
            $table->string('cod_ean1')->nullable($value = true);
            $table->string('cod_ean2')->nullable($value = true);
            $table->string('descricao_pro');
            $table->string('tipo_emb');
            $table->string('cfop_venda')->nullable($value = true);
            $table->string('ncm')->nullable($value = true);
            $table->string('cest')->nullable($value = true);
            $table->string('qtd_estoque')->nullable($value = true);
            $table->decimal('valor_venda', 5,2);
            $table->decimal('valor_custo', 5,2)->nullable($value = true);
            $table->string('reducao_bc_icms')->nullable($value = true);
            $table->string('cst_ipi')->nullable($value = true);
            $table->string('aliquota_ipi')->nullable($value = true);
            $table->string('fcp')->nullable($value = true);
            $table->integer('id_cst')->unsigned()->nullable($value = true);
            $table->integer('id_for')->unsigned()->nullable($value = true);
            $table->foreign('id_cst')->references('id')->on('cst');
            $table->foreign('id_for')->references('id')->on('fornecedor');
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
        Schema::dropIfExists('produto');
    }
}
