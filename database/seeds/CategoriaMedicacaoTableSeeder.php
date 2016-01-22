<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class CategoriaMedicacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categoria_medicacao')->truncate();

        \App\CatMedicacao::create([
            'nome'      => 'ANEMIA',
            'status'    => 1,
        ]);
        $this->command->info('Categoria ANEMIA,  criada com sucesso!!!');

        \App\CatMedicacao::create([
            'nome'      => 'ANTI ALÉRGICOS',
            'status'    => 1,
        ]);
        $this->command->info('Categoria ANTI ALÉRGICOS,  criada com sucesso!!!');

        \App\CatMedicacao::create([
            'nome'      => 'ANTIBIÓTICOS',
            'status'    => 1,
        ]);
        $this->command->info('Categoria ANTIBIÓTICOS,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'ANTIINFLAMATÓRIOS',
            'status'    => 1,
        ]);
        $this->command->info('Categoria ANTIINFLAMATÓRIOS,  criada com sucesso!!!');

        \App\CatMedicacao::create([
            'nome'      => 'APNÉIA DO SONO',
            'status'    => 1,
        ]);
        $this->command->info('Categoria APNÉIA DO SONO,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'ASMA & DPOC',
            'status'    => 1,
        ]);
        $this->command->info('Categoria ASMA & DPOC,  criada com sucesso!!!');

        \App\CatMedicacao::create([
            'nome'      => 'CALMANTES',
            'status'    => 1,
        ]);
        $this->command->info('Categoria CALMANTES,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'DIABETES',
            'status'    => 1,
        ]);
        $this->command->info('Categoria DIABETES,  criada com sucesso!!!');

        \App\CatMedicacao::create([
            'nome'      => 'DIARREIA',
            'status'    => 1,
        ]);
        $this->command->info('Categoria DIARREIA,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'DIETAS',
            'status'    => 1,
        ]);
        $this->command->info('Categoria DIETAS,  criada com sucesso!!!');

        \App\CatMedicacao::create([
            'nome'      => 'DOR',
            'status'    => 1,
        ]);
        $this->command->info('Categoria DOR,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'EXAMES',
            'status'    => 1,
        ]);
        $this->command->info('Categoria EXAMES,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'GRIPE & TOSSE',
            'status'    => 1,
        ]);
        $this->command->info('Categoria GRIPE & TOSSE,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'HERPES',
            'status'    => 1,
        ]);
        $this->command->info('Categoria HERPES,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'HIPERCOLESTEROLEMIA',
            'status'    => 1,
        ]);
        $this->command->info('Categoria HIPERCOLESTEROLEMIA,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'HIPERTEN',
            'status'    => 1,
        ]);
        $this->command->info('Categoria HIPERTEN,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'HIPERTENSÃO ARTERIAL',
            'status'    => 1,
        ]);
        $this->command->info('Categoria HIPERTENSÃO ARTERIAL,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'HIPERTENSÃO ARTERIAL PULMONAR',
            'status'    => 1,
        ]);
        $this->command->info('Categoria HIPERTENSÃO ARTERIAL PULMONAR,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'MICOSE',
            'status'    => 1,
        ]);
        $this->command->info('Categoria MICOSE,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'MULCOLÍTICO',
            'status'    => 1,
        ]);
        $this->command->info('Categoria MULCOLÍTICO,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'NUTRICIONISTA',
            'status'    => 1,
        ]);
        $this->command->info('Categoria NUTRICIONISTA,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'ONCOLOGIA',
            'status'    => 1,
        ]);
        $this->command->info('Categoria ONCOLOGIA,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'OSTEOPATA',
            'status'    => 1,
        ]);
        $this->command->info('Categoria OSTEOPATA,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'OSTEOPOROSE',
            'status'    => 1,
        ]);
        $this->command->info('Categoria OSTEOPOROSE,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'POLISONOGRAFIA',
            'status'    => 1,
        ]);
        $this->command->info('Categoria POLISONOGRAFIA,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'POMADAS DE CORTICOIDES',
            'status'    => 1,
        ]);
        $this->command->info('Categoria POMADAS DE CORTICOIDES,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'RAIO X',
            'status'    => 1,
        ]);
        $this->command->info('Categoria RAIO X,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'SUPLEMENTO ALIMENTAR',
            'status'    => 1,
        ]);
        $this->command->info('Categoria SUPLEMENTO ALIMENTAR,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'TOMOGRAFIA COMP/RESS MAGNÉTICA/ULTRA SOM',
            'status'    => 1,
        ]);
        $this->command->info('Categoria TOMOGRAFIA COMP/RESS MAGNÉTICA/ULTRA SOM,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'VACINAS',
            'status'    => 1,
        ]);
        $this->command->info('Categoria VACINAS,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'VERMES',
            'status'    => 1,
        ]);
        $this->command->info('Categoria VERMES,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'VITAMINAS',
            'status'    => 1,
        ]);
        $this->command->info('Categoria VITAMINAS,  criada com sucesso!!!');


        \App\CatMedicacao::create([
            'nome'      => 'ÚLCERA, GASTRITE & RGE',
            'status'    => 1,
        ]);
        $this->command->info('Categoria ÚLCERA, GASTRITE & RGE,  criada com sucesso!!!');

    }
}
