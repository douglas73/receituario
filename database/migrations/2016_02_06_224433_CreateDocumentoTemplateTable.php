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
            $table->integer('documento_tipo_id');
            $table->string('nome',100);
           // $table->text('cabecalho')->nullable();
           // $table->string('cabecalho_imagem',200)->nullable();
            $table->text('texto_central')->nullable();
            //$table->string('texto_central_imagem',200)->nullable();
            //$table->text('rodape')->nullable();
            //$table->string('rodape_imagem',200)->nullable();
            //$table->text('ps')->nullable()->nullable();
            $table->string('termos',200)->nullable();
            $table->integer('padrao')->default(0);
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
