<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamacaoDenunciaRestaurante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamacao_denuncia_res', function (Blueprint $table) {
            $table->integer('id_reclamacao')->unsigned()->length(10);

            $table->integer('id_restaurante')->unsigned()->length(10);

            $table->primary(array('id_reclamacao', 'id_restaurante'));

            $table->foreign('id_reclamacao')
                ->references('id_reclamacao')
                ->on('reclamacao')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_restaurante')
                ->references('id_restaurante')
                ->on('restaurante')
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
        Schema::dropIfExists('reclamacao_denuncia_res');
    }
}
