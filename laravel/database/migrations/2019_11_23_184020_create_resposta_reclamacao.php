<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespostaReclamacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resposta', function (Blueprint $table) { //cria tabela resposta
            $table->increments('id_resposta');
            $table->integer('status');
            $table->text('descricao');
            $table->integer('id_reclamacao')->unsigned()->unique();
            $table->integer('id_admin')->unsigned()->unique();
            $table->dateTime('data_resposta');
        });

        Schema::create('reclamacao', function (Blueprint $table) { //cria tabela reclamacao
            $table->increments('id_reclamacao');
            $table->dateTime('data_ocorrencia');
            $table->string('categoria')->nullable();
            $table->text('descricao')->nullable();
            $table->integer('id_restaurante')->unsigned()->unique();
            $table->integer('id_resposta')->unsigned()->unique();
            $table->integer('id_prato')->unsigned()->unique();
            $table->integer('id_aluno')->unsigned()->unique();

        });

        Schema::table('resposta',function(Blueprint $table){
            $table->foreign('id_reclamacao')
                ->references('id_reclamacao')
                ->on('reclamacao')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_admin')
                ->references('id_admin')
                ->on('admin')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('resposta');
    }
}
