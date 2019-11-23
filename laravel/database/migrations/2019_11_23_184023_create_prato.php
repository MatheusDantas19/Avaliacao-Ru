<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prato', function (Blueprint $table) {
            $table->increments('id_prato');
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->integer('status')->nullable();
            $table->integer('id_reclamacao')->unsigned()->nullable()->unique();
        });

        Schema::table('prato',function (Blueprint $table){
            $table->foreign('id_reclamacao')
                ->references('id_reclamacao')
                ->on('reclamacao')
                ->onDelete('set null')
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
        Schema::dropIfExists('prato');
        Schema::enableForeignKeyConstraints();
    }
}
