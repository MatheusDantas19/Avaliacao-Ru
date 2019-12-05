<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePratoContemIngrediente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prato_contem_ingrediente', function (Blueprint $table) {
            $table->integer('id_prato')->unsigned()->length(10);

            $table->integer('id_ingrediente')->unsigned()->length(10);

            $table->primary(array('id_prato', 'id_ingrediente'));

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
        Schema::dropIfExists('prato_contem_ingrediente');
    }
}
