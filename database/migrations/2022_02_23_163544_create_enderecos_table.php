<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('tipoEndereco');
            $table->string('logradouro');
            $table->string('complento');
            $table->string('cep');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->unsignedBigInteger('id_membros');
            $table->timestamps();
        });

        Schema::table('enderecos', function (Blueprint $table){
            //adicionando id ao endereço
            $table->foreign('id_membros')->references('id')->on('endereco')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
