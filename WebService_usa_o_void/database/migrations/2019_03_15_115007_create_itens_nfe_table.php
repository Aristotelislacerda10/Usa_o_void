<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensNfeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_nfe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_nf');
            $table->integer('quantidade');
            $table->string('reducao_icms')->nullable($value = true);
            $table->string('cfop');
            $table->string('sub_tributaria')->nullable($value = true);
            $table->string('valor_agregado')->nullable($value = true);
            $table->string('aliquota_fora_estado')->nullable($value = true);
            $table->string('unidade')->nullable($value = true);
            $table->integer('cod_produto')->unsigned()->nullable($value = true);
            $table->foreign('cod_produto')->references('cod_pro')->on('produto');
            $table->decimal('valor_total');
            $table->decimal('base_sub_tributaria');
            $table->decimal('valor_sub_tributaria');
            $table->decimal('unitario');
            $table->decimal('isentas')->nullable($value = true);
            $table->decimal('outras')->nullable($value = true);
            $table->decimal('frete')->nullable($value = true);
            $table->integer('csosn');
            $table->decimal('fcp')->nullable($value = true);
            $table->decimal('ibpt_est')->nullable($value = true);
            $table->decimal('ibpt_nac')->nullable($value = true);
            $table->integer('cst');
            $table->decimal('valor_icms');
            $table->decimal('aliquota_pis')->nullable($value = true);
            $table->decimal('aliquota_cofins')->nullable($value = true);
            $table->decimal('bc_cofins')->nullable($value = true);
            $table->decimal('valor_ipi');
            $table->decimal('base_calculo');
            $table->decimal('aliq_ipi');
            $table->integer('cst_ipi')->nullable($value = true);
            $table->integer('cst_cofins')->nullable($value = true);
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
        Schema::dropIfExists('itens_nfe');
    }
}
