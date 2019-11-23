<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RestauranteServe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurante_serve', function (Blueprint $table) {
            $table->string('turno');
            $table->string('dia_semana');
            $table->integer('id_prato')->unsigned()->unique();
            $table->integer('id_restaurante')->unsigned()->unique();
        });

        Schema::table('restaurante_serve',function (Blueprint $table){
            $table->foreign('id_prato')
                ->references('id_prato')
                ->on('prato')
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
        Schema::drop('restaurante_serve');
        Schema::enableForeignKeyConstraints();

    }
}
