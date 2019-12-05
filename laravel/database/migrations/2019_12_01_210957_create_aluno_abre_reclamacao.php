<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoAbreReclamacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_abre_reclamacao', function (Blueprint $table) {
            $table->integer('matricula')->unsigned()->length(10);

            $table->integer('id_reclamacao')->unsigned()->length(10);

            $table->primary(array('matricula', 'id_reclamacao'));


            $table->dateTime('data');

            $table->foreign('matricula')
                ->references('matricula')
                ->on('aluno')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_reclamacao')
                ->references('id_reclamacao')
                ->on('reclamacao')
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
        Schema::dropIfExists('aluno_abre_reclamacao');
    }
}
