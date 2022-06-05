<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_registros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('província');
            $table->string('distrito');
            $table->string('bairro');
            $table->string('casa');
            $table->string('documento_numero');
            $table->string('nuit');
            $table->integer('contacto_1');
            $table->integer('contacto_2');
            $table->string('profissao');
            $table->string('organizacao');
            $table->foreignId('requerente_id');
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
        Schema::dropIfExists('pre_registros');
    }
}
