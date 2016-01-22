<?php

use Illuminate\Database\Seeder;

class TypeUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('typeuser')->truncate();

        \App\TypeUser::create([
            'nome'      => 'Administrador',
            'status'    =>1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de usuario Adminstrador criado com sucesso!!!');

        \App\TypeUser::create([
            'nome'      => 'Médico',
            'status'    =>1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de usuario Medico criado com sucesso!!!');

        \App\TypeUser::create([
            'nome'      => 'Secretaria',
            'status'    =>1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de usuario Secretaria criado com sucesso!!!');

        \App\TypeUser::create([
            'nome'      => 'Visitante',
            'status'    =>1,
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tipo de usuario Visitante criado com sucesso!!!');

    }

}
