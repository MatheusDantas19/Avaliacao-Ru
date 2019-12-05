<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminGerenciaRestaurante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_gerencia_restaurante', function (Blueprint $table) {
            $table->integer('id_admin')->unsigned()->length(10);

            $table->integer('id_restaurante')->unsigned()->length(10);

            $table->primary(array('id_admin', 'id_restaurante'));

            $table->foreign('id_admin')
                ->references('id_admin')
                ->on('admin')
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
        Schema::dropIfExists('admin_gerencia_restaurante');
    }
}
