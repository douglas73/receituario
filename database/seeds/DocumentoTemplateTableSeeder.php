<?php

use Illuminate\Database\Seeder;

class DocumentoTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('documento_template')->truncate();

        \App\DocumentoTemplate::create([
            'cabecalho'         => '######## Cabeçalho do documento ##########',
            'texto_central'     => '#####  TEXTO CENTRAL DO DOCUMENTO ######',
            'texto_central'     => '#####  TEXTO CENTRAL DO DOCUMENTO ######',
            'rodape'            => '#####  RODAPÉ DO DOCUMENTO  ######',
            'ps'                => '#####  PS  DO DOCUMENTO ########',
        ]);
        $this->command->info('Layout padrão de documentos criado com sucesso!!!');

    }
}
