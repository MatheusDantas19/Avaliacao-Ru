<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IngredientePrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingrediente_prato', function (Blueprint $table) {
            $table->integer('id_prato')->unsigned()->unique();
            $table->integer('id_ingrediente')->unsigned()->unique();
        });

        Schema::table('ingrediente_prato',function (Blueprint $table){
            $table->foreign('id_prato')
                ->references('id_prato')
                ->on('prato')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_ingrediente')
                ->references('id_ingrediente')
                ->on('ingrediente')
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
        Schema::drop('ingrediente_prato');
        Schema::enableForeignKeyConstraints();

    }
}
