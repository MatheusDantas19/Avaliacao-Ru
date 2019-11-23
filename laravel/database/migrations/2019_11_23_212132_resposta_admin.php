<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RespostaAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resposta_admin', function (Blueprint $table) {
            $table->date('data');
            $table->integer('id_resposta')->unsigned()->unique();
            $table->integer('id_admin')->unsigned()->unique();

        });

        Schema::table('resposta_admin', function (Blueprint $table){
            $table->foreign('id_resposta')
                ->references('id_resposta')
                ->on('resposta')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_admin')
                ->references('id_admin')
                ->on('admin')
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
        Schema::drop('resposta_admin');
        Schema::enableForeignKeyConstraints();


    }
}
