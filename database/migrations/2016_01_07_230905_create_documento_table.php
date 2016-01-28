<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('documento_tipo_id');
            $table->integer('paciente_id');
            $table->integer('medico_id');
            $table->text('introducao')->nullable();
            $table->text('fechamento')->nullable();
            $table->float('impressoes');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documento');
    }
}
