<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->increments('id');
            $table->char('fisica_juridica');
            $table->char('cliente_ativo');
            $table->string('nome_for');
            $table->string('cnpj_for');
            $table->string('insc_estadual')->nullable($value = true);
            $table->char('indicador_ie');
            $table->string('cep_for')->nullable($value = true);
            $table->string('endereco_for', 60)->nullable($value = true);
            $table->integer('numero_end')->nullable($value = true);
            $table->string('bairro', 20)->nullable($value = true);
            $table->integer('ibge')->nullable($value = true);
            $table->string('cidade', 10)->nullable($value = true);
            $table->string('estado', 10)->nullable($value = true);
            $table->string('fone')->nullable($value = true);
            $table->string('email', 10)->nullable($value = true);
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
        Schema::dropIfExists('fornecedor');
    }
}
