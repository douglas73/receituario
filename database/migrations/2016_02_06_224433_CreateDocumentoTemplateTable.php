<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_template', function (Blueprint $table) {
            $table->increments('id');
            $table->text('cabecalho')->nullable();
            $table->text('texto_central')->nullable();
            $table->text('rodape')->nullable();
            $table->text('ps')->nullable();
            $table->string('termos',200);
            $table->integer('status');
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
        Schema::drop('documento_template');
    }
}
