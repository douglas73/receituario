<?php

use Illuminate\Database\Seeder;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('paciente')->truncate();

        \App\Paciente::create([
            'nome'              => 'Visitante',
            'sexo'              => 'masculino',
            'dtnascimento'      => '1977-01-20',
            'profissao'         => 'Pintor',
            'escolaridade'      => 'fundamental',
            'identidade'        => '00012544-2',
            'cpf'               => '37756051505',
            'status'            => 1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Paciete: Josefino Silva Garibaldi,  criado com sucesso!!!');
    }
}
