<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestauranteServePrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurante_serve_prato', function (Blueprint $table) {
            $table->integer('id_restaurante')->unsigned()->length(10);

            $table->integer('id_prato')->unsigned()->length(10);

            $table->string('turno',3)->nullable()->unique();

            $table->string('dia_semana',3)->nullable()->unique();

            $table->primary(array('id_restaurante', 'id_prato'));

            $table->foreign('id_restaurante')
                ->references('id_restaurante')
                ->on('restaurante')
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
        Schema::dropIfExists('restaurante_serve_prato');
    }
}
