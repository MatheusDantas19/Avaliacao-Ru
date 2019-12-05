<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminElaboraResposta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_elabora_resposta', function (Blueprint $table) {
            $table->integer('id_admin')->unsigned()->length(10);

            $table->integer('id_resposta')->unsigned()->length(10);

            $table->dateTime('data');

            $table->primary(array('id_admin', 'id_resposta'));

            $table->foreign('id_admin')
                ->references('id_admin')
                ->on('admin')
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
        Schema::dropIfExists('admin_elabora_resposta');
    }
}
