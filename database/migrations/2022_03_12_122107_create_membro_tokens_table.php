<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembroTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro_tokens', function(Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('membro_id');
            $table->foreign('membro_id')->references('id')->on('membros')->cascadeOnDelete(); 
            $table->string('token')->unique();
            $table->timestamp('consumed_at')->nullable();
            $table->datetime('expires_at');
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
        Schema::dropIfExists('membro_tokens');
    }
}
