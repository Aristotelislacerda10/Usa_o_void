<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedor', function (Blueprint $table) {
            $table->increments('id');
            $table->char('vendedor_ativo');
            $table->string('nome_ven');
            $table->string('cpf_ven');
            $table->string('rg_ven')->nullable($value = true);
            $table->string('endereco_ven', 60)->nullable($value = true);
            $table->string('numero_end')->nullable($value = true);
            $table->string('bairro', 20)->nullable($value = true);
            $table->string('ibge')->nullable($value = true);
            $table->string('cidade', 10)->nullable($value = true);
            $table->string('estado', 10)->nullable($value = true);
            $table->string('fone')->nullable($value = true);
            $table->decimal('comicao_avista', 5,2)->nullable($value = true);
            $table->decimal('comicao_aprazo', 5,2)->nullable($value = true);
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
        Schema::dropIfExists('vendedor');
    }
}
