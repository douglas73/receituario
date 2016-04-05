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
            'documento_tipo_id' => 1,
            'nome'              => 'Template Padrão',
            'texto_central'     => '#####  TEXTO CENTRAL DO DOCUMENTO ######',
            'padrao'            => 1,
        ]);
        $this->command->info('Layout padrão de documentos criado com sucesso!!!');

    }
}
