<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('representantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('endereco');
            $table->string('telefone1');
            $table->string('telefone2');
            $table->string('areaDeRepresentacao');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('representantes');
    }
}
