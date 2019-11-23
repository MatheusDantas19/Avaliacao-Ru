<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminGerencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_gerencia', function (Blueprint $table) {
            $table->integer('id_admin')->unsigned()->unique();
            $table->integer('id_restaurante')->unsigned()->unique();
        });

        Schema::table('admin_gerencia',function (Blueprint $table){

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
        Schema::drop('admin_gerencia');
        Schema::enableForeignKeyConstraints();

    }
}
