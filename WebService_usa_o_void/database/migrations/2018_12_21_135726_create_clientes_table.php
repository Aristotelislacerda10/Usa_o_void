<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('fisica_juridica');
            $table->char('cliente_ativo');
            $table->string('nome_cli');
            $table->string('cnpj_cli');
            $table->string('insc_estadual')->nullable($value = true);
            $table->char('indicador_ie');
            $table->string('cep_cli')->nullable($value = true);
            $table->string('endereco_cli', 60)->nullable($value = true);
            $table->integer('numero_end')->nullable($value = true);
            $table->string('bairro', 20)->nullable($value = true);
            $table->integer('ibge')->nullable($value = true);
            $table->string('cidade', 10)->nullable($value = true);
            $table->string('estado', 10)->nullable($value = true);
            $table->string('fone')->nullable($value = true);
            $table->string('email')->nullable($value = true);
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
        Schema::dropIfExists('clientes');
    }
}
