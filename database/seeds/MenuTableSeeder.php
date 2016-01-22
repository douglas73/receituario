<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('menu')->truncate();

        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Principal',
            'rota'                          => 'home',
            'descricao'                     => 'Tela principal do sistema',
            'icone'                         => 'fa fa-home',
            'ordem'                         => 0,
            'status'                        => 1,
        ]);
        $this->command->info('Menu  non non non  criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Receitas',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Receitas',
            'icone'                         => 'fa fa-home',
            'ordem'                         => 0,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Receitas criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 2,
            'nome'                          => 'Nova Receita',
            'rota'                          => '',
            'descricao'                     => 'Criar nova Receita',
            'icone'                         => 'fa fa-hacker-news',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Receitas criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 2,
            'nome'                          => 'Carregar Receita',
            'rota'                          => '',
            'descricao'                     => 'Carrega receita previamente gravada no sistema',
            'icone'                         => 'fa fa-hacker-news',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Receitas: [Carrega Receita] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 2,
            'nome'                          => 'Editar Receita',
            'rota'                          => '',
            'descricao'                     => 'Edição de receita previamente gravada no sistema',
            'icone'                         => 'fa fa-hacker-news',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Receitas: [Carrega Receita] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Pacientes',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Pacientes do sistema',
            'icone'                         => 'fa fa-bed',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Pacientes criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 6,
            'nome'                          => 'Informar dados temporarios',
            'rota'                          => '',
            'descricao'                     => 'Informar dados de pacientes que não serão gravados no base de dados',
            'icone'                         => 'fa fa-clock-o',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Peciente: [Informar dados temporarios] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 6,
            'nome'                          => 'Carregar Paciente',
            'rota'                          => '',
            'descricao'                     => 'Carrega Paciente previamente gravado no sistema para criação de Receita',
            'icone'                         => 'fa fa-folder-open-o',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Paciente: [Informar dados temporarios] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 6,
            'nome'                          => 'Cadastrar Paciente',
            'rota'                          => '',
            'descricao'                     => 'Gravar paciente no sistema para criaçaõ de receitas',
            'icone'                         => 'fa fa-plus-square-o',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Paciente: [Cadastrar Paciente] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 6,
            'nome'                          => 'Editar Paciente',
            'rota'                          => '',
            'descricao'                     => 'Carrega Paciente previamente gravado no sistema para edição',
            'icone'                         => 'fa fa-folder-open-o',
            'ordem'                         => 4,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Paciente: [Editar Paciente] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Medicos',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Medicos do sistema',
            'icone'                         => 'fa fa-medkit',
            'ordem'                         => 4,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Medicos criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 11,
            'nome'                          => 'Cadastrar',
            'rota'                          => '',
            'descricao'                     => 'Cadastrar médicos no sistema',
            'icone'                         => 'fa fa-plus',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicos: [Cadastrar] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 11,
            'nome'                          => 'Editar',
            'rota'                          => '',
            'descricao'                     => 'Editar médicos do sistema',
            'icone'                         => 'fa fa-edit',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicos: [Editar] criado com sucesso!');



    }
}
