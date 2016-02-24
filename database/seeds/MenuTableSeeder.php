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

        /**
         *    ITENS DE MENUS
         *
         *    Coloque aqui em ordem de exibição os itens de menu que conterão subitens.    Devem ter ordem sequencial
         *    Os respectivos sub-itens, deverão seguir suas ordens,   assim,  um item (Principal, como exemplo)
         *    Item Principal, que tem ordem 1,  tera seus sub-itens com o menu_id igual a ordem do item. No caso, 1 do
         *    Item principal
         *
         */

        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Principal',
            'rota'                          => 'home',
            'descricao'                     => 'Tela principal do sistema',
            'icone'                         => 'fa fa-home',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Menu  non non non  criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Documentos',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Documentos',
            'icone'                         => 'fa fa-book',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Documentos criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Categoria de Medicação',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Categoria de Medicamentos do sistema',
            'icone'                         => 'fa fa-tasks',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Categoria de Medicação criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Layouts',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Layouts dos documentos',
            'icone'                         => 'fa fa-font',
            'ordem'                         => 4,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Medicos criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Medicamentos',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Medicamentos do sistema',
            'icone'                         => 'fa fa-user-md',
            'ordem'                         => 5,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Medicos criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Pacientes',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Pacientes do sistema',
            'icone'                         => 'fa fa-bed',
            'ordem'                         => 5,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Pacientes criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 0,
            'nome'                          => 'Usuarios',
            'rota'                          => '',
            'descricao'                     => 'Gerenciador de Usuários do sistema',
            'icone'                         => 'fa fa-users',
            'ordem'                         => 6,
            'status'                        => 1,
        ]);
        $this->command->info('Grupo Menu Usuários criado com sucesso!');



        /**
         *    SUB-ITENS DE MENUS
         *
         *      Devem ter seus indices (menu_id) igual o indice (ordem) do item de menu a que pertencem.
         *      Assim,  se o item tem a ordem  1,   seu sub-item terá menu_id = 1.
         */

        #Item de menu Documentos (ordem 2, deve ter menu_id = 2)
        \App\Menu::create([
            'menu_id'                       => 2,
            'nome'                          => 'Novo Documento',
            'rota'                          => '',
            'descricao'                     => 'Criar novo Documento',
            'icone'                         => 'fa fa-stethoscope',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Item do Grupo Menu Documentos criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 2,
            'nome'                          => 'Carregar Documento',
            'rota'                          => '',
            'descricao'                     => 'Carrega documento previamente gravado no sistema',
            'icone'                         => 'fa fa-folder-open',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Documentos: [Carrega Documento] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 2,
            'nome'                          => 'Editar Documento',
            'rota'                          => '',
            'descricao'                     => 'Edição de documento previamente gravada no sistema',
            'icone'                         => 'fa fa-edit',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Documento: [Carregar Documento] criado com sucesso!');


        #Item de menu Categoria de Medicação (ordem 3, deve ter menu_id = 3)

        \App\Menu::create([
            'menu_id'                       => 3,
            'nome'                          => 'Listagem',
            'rota'                          => 'catmedicacao.index',
            'descricao'                     => 'Listagem dos medicamentos cadastrados',
            'icone'                         => 'fa fa-list-ol',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Categoria de Medicação: [Listagem] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 3,
            'nome'                          => 'Cadastro',
            'rota'                          => 'catmedicacao.create',
            'descricao'                     => 'Cadastro dos medicamentos',
            'icone'                         => 'fa fa-plus-square-o',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Categoria de Medicação: [Cadastro] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 3,
            'nome'                          => 'Edição',
            'rota'                          => 'catmedicacao.index',
            'descricao'                     => 'Edição dos medicamentos cadastrados',
            'icone'                         => 'fa fa-edit',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Categoria de Medicação: [Edição] criado com sucesso!');



        #Item de menu Medicamentos (ordem 4, deve ter menu_id = 4)

        \App\Menu::create([
            'menu_id'                       => 4,
            'nome'                          => 'Listagem',
            'rota'                          => 'catmedicacao.index',
            'descricao'                     => 'Listagem dos layouts cadastrados',
            'icone'                         => 'fa fa-list-ol',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Layouts: [Layouts] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 4,
            'nome'                          => 'Cadastro',
            'rota'                          => 'catmedicacao.index',
            'descricao'                     => 'Cadastro dos layouts',
            'icone'                         => 'fa fa-plus-square-o',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Layouts: [Cadastro] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 4,
            'nome'                          => 'Layout Padrão',
            'rota'                          => 'catmedicacao.index',
            'descricao'                     => 'Escolha dos layouts padrão para cada documento',
            'icone'                         => 'fa fa-star',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Layouts: [Layout Padrão] criado com sucesso!');


        #Item de menu Medicamentos (ordem 5, deve ter menu_id = 5)

        \App\Menu::create([
            'menu_id'                       => 5,
            'nome'                          => 'Listagem',
            'rota'                          => 'medicacao.index',
            'descricao'                     => 'Listagem dos medicamentos cadastrados',
            'icone'                         => 'fa fa-list-ol',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicamentos: [Listagem] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 5,
            'nome'                          => 'Cadastro',
            'rota'                          => 'medicacao.create',
            'descricao'                     => 'Cadastro dos medicamentos',
            'icone'                         => 'fa fa-plus-square-o',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicamentos: [Cadastro] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 5,
            'nome'                          => 'Edição',
            'rota'                          => 'medicacao.index',
            'descricao'                     => 'Edição dos medicamentos cadastrados',
            'icone'                         => 'fa fa-edit',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Medicamentos: [Edição] criado com sucesso!');


        #Item de menu Pacientes (ordem 5, deve ter menu_id = 5)

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
            'rota'                          => 'paciente.create',
            'descricao'                     => 'Gravar paciente no sistema para criaçaõ de receitas',
            'icone'                         => 'fa fa-plus-square-o',
            'ordem'                         => 3,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Paciente: [Cadastrar Paciente] criado com sucesso!');


        \App\Menu::create([
            'menu_id'                       => 6,
            'nome'                          => 'Editar Paciente',
            'rota'                          => 'paciente.index',
            'descricao'                     => 'Carrega Paciente previamente gravado no sistema para edição',
            'icone'                         => 'fa fa-folder-open-o',
            'ordem'                         => 4,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Paciente: [Editar Paciente] criado com sucesso!');


        #Item de menu Usuários (ordem 6, deve ter menu_id = 6)
        \App\Menu::create([
            'menu_id'                       => 7,
            'nome'                          => 'Autorizar/Editar',
            'rota'                          => 'usuarios.listagem',
            'descricao'                     => 'Autorização de Usuário no sistema',
            'icone'                         => 'fa fa-unlock-alt',
            'ordem'                         => 1,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Usuários: [Cadastrar] criado com sucesso!');

        \App\Menu::create([
            'menu_id'                       => 7,
            'nome'                          => 'Listagem',
            'rota'                          => '',
            'descricao'                     => 'Editar usuários do sistema',
            'icone'                         => 'fa fa-edit',
            'ordem'                         => 2,
            'status'                        => 1,
        ]);
        $this->command->info('Item de Grupo Menu Usuários: [Editar] criado com sucesso!');

    }
}
