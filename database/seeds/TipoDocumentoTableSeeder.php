<?php

use Illuminate\Database\Seeder;

class TipoDocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('tp_documento')->truncate();

        \App\TipoDocumento::create([
            'nome'              => 'Receita médica',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de documento: Receita médica,  criada com sucesso!!!');

        \App\TipoDocumento::create([
            'nome'              => 'Pedido de Exame(s)',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de documento: Pedido de Exame,  criada com sucesso!!!');

        \App\TipoDocumento::create([
            'nome'              => 'Encaminhamento',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de documento: Encaminhamento,  criada com sucesso!!!');


        \App\TipoDocumento::create([
            'nome'              => 'Justificativa de dispensa médica',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de documento: Justificativa de dispensa médica,  criada com sucesso!!!');


        \App\TipoDocumento::create([
            'nome'              => 'Atestado Admissional',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de documento: Atestado Admissional,  criada com sucesso!!!');


        \App\TipoDocumento::create([
            'nome'              => 'Atestado Demissional',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de documento: Atestado Demissional,  criada com sucesso!!!');


        \App\TipoDocumento::create([
            'nome'              => 'Atestado de Afastamento',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de documento: Atestado de Afastamento,  criada com sucesso!!!');


        \App\TipoDocumento::create([
            'nome'              => 'Atestado de Comparecimento',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de documento: Atestado de Comparecimento,  criada com sucesso!!!');



        \App\TipoDocumento::create([
            'nome'              => 'Atestado de Portador de Doenças',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de documento: Atestado de Portador de Doenças,  criada com sucesso!!!');


        \App\TipoDocumento::create([
            'nome'              => 'Atestado de Perícia Médica',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de documento: Atestado de Perícia Médica,  criada com sucesso!!!');

    }
}
