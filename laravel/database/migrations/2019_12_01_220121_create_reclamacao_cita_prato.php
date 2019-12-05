<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamacaoCitaPrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamacao_cita_prato', function (Blueprint $table) {
            $table->integer('id_reclamacao')->unsigned()->length(10);

            $table->integer('id_prato')->unsigned()->length(10);

            $table->primary(array('id_reclamacao', 'id_prato'));

            $table->foreign('id_reclamacao')
                ->references('id_reclamacao')
                ->on('reclamacao')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_prato')
                ->references('id_prato')
                ->on('prato')
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
        Schema::dropIfExists('reclamacao_cita_prato');
    }
}
