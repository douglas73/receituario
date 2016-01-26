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
            'icone'                         => 'fa fa-book',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Receitas criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 2,
            'nome'                          => 'Nova Receita',
            'rota'                          => '',
            'descricao'                     => 'Criar nova Receita',
            'icone'                         => 'fa fa-stethoscope',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Receitas criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 2,
            'nome'                          => 'Carregar Receita',
            'rota'                          => '',
            'descricao'                     => 'Carrega receita previamente gravada no sistema',
            'icone'                         => 'fa fa-folder-open',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Receitas: [Carrega Receita] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 2,
            'nome'                          => 'Editar Receita',
            'rota'                          => '',
            'descricao'                     => 'Edição de receita previamente gravada no sistema',
            'icone'                         => 'fa fa-edit',
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
            'ordem'                         => 4,
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
            'ordem'                         => 4,
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
            'nome'                          => 'Usuarios',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Usuários do sistema',
            'icone'                         => 'fa fa-users',
            'ordem'                         => 5,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Usuários criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 11,
            'nome'                          => 'Autorizar / Editar',
            'rota'                          => 'usuarios.listagem',
            'descricao'                     => 'Autorização de Usuário no sistema',
            'icone'                         => 'fa fa-unlock-alt',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicos: [Cadastrar] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 11,
            'nome'                          => 'Editar',
            'rota'                          => '',
            'descricao'                     => 'Editar usuários do sistema',
            'icone'                         => 'fa fa-edit',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicos: [Editar] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Medicamentos',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Medicamentos do sistema',
            'icone'                         => 'fa fa-user-md',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Medicos criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 14,
            'nome'                          => 'Listagem',
            'rota'                          => 'medicacao.index',
            'descricao'                     => 'Listagem dos medicamentos cadastrados',
            'icone'                         => 'fa fa-list-ol',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicamentos: [Listagem] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 14,
            'nome'                          => 'Cadastro',
            'rota'                          => 'medicacao.create',
            'descricao'                     => 'Cadastro dos medicamentos',
            'icone'                         => 'fa fa-plus-square-o',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicamentos: [Cadastro] criado com sucesso!');

              \App\Menu::create([
            'menu_id'                       => 14,
            'nome'                          => 'Edição',
            'rota'                          => 'medicacao.index',
            'descricao'                     => 'Edição dos medicamentos cadastrados',
            'icone'                         => 'fa fa-edit',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicamentos: [Edição] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Categoria de Medicação',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Categoria de Medicamentos do sistema',
            'icone'                         => 'fa fa-tasks',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);

        $this->command->info('Grupo Menu Categoria de Medicação criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 18,
            'nome'                          => 'Listagem',
            'rota'                          => 'catmedicacao.index',
            'descricao'                     => 'Listagem dos medicamentos cadastrados',
            'icone'                         => 'fa fa-list-ol',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicamentos: [Listagem] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 18,
            'nome'                          => 'Cadastro',
            'rota'                          => 'catmedicacao.create',
            'descricao'                     => 'Cadastro dos medicamentos',
            'icone'                         => 'fa fa-plus-square-o',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicamentos: [Cadastro] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 18,
            'nome'                          => 'Edição',
            'rota'                          => 'catmedicacao.index',
            'descricao'                     => 'Edição dos medicamentos cadastrados',
            'icone'                         => 'fa fa-edit',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicamentos: [Edição] criado com sucesso!');




    }
}
