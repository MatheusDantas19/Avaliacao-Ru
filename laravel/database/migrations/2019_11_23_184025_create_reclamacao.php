<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::enableForeignKeyConstraints();
//        Schema::create('reclamacao', function (Blueprint $table) {
//            $table->increments('id_reclamacao');
//            $table->dateTime('data_ocorrencia');
//            $table->string('categoria')->nullable();
//            $table->text('descricao')->nullable();
//            $table->integer('id_restaurante')->unsigned();
//            $table->integer('id_resposta')->unsigned();
//            $table->integer('id_prato')->unsigned();
//            $table->integer('id_aluno')->unsigned();
//
//        });

        Schema::table('reclamacao',function (Blueprint $table){
            $table->foreign('id_restaurante')
                ->references('id_restaurante')
                ->on('restaurante')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_resposta')
                ->references('id_resposta')
                ->on('resposta')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_prato')
                ->references('id_prato')
                ->on('prato')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_aluno')
                ->references('id_aluno')
                ->on('aluno')
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
        Schema::dropIfExists('reclamacao');
        Schema::enableForeignKeyConstraints();

    }
}
