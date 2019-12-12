<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespostaRespondeReclamacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resposta_responde_reclamacao', function (Blueprint $table) {
            $table->integer('id_reclamacao')->unsigned()->length(10);
            $table->integer('id_resposta')->unsigned()->length(10);


            $table->primary(array('id_reclamacao','id_resposta'));

            $table->foreign('id_reclamacao')
                ->references('id_reclamacao')
                ->on('reclamacao')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_resposta')
                ->references('id_resposta')
                ->on('resposta')
                ->onDelete('cascade')
                ->onUpdate('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('resposta_responde_reclamacao');
    }
}
