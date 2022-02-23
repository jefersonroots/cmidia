<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Membros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->string('tipoEndereco');
            $table->string('logradouro');
            $table->string('complento');
            $table->string('cep');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();
        });

        Schema::table('membros', function (Blueprint $table){
            //adicionando id ao endereço
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
