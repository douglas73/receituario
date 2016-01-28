<?php
use \App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();

        \App\User::create([
            'name'      => 'Douglas',
            'lastname'  => 'Oliveira',
            'typeuser_id'   => 1,
            'email'     => 'douglas73@gmail.com',
            'photo'     => 'douglas.jpg',
            'password'  => bcrypt('123'),
            'status'    => 1
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Usuário Douglas Oliveira,  criado com sucesso!!!');
        \App\User::create([
            'name'      => 'Andreia',
            'lastname'  => 'Ribeiro',
            'typeuser_id'   => 2,
            'email'     => 'tatacesj@gmail.com',
            'photo'     => 'andreia.jpg',
            'password'  => bcrypt('123'),
            'status'    => 1
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Usuário Andreia Ribeiro,  criado com sucesso!!!');
        \App\User::create([
            'name'      => 'Usuário',
            'lastname'  => 'Visitante',
            'typeuser_id'   => 3,
            'email'     => 'proliberal@proliberal.com.br',
            'photo'     => 'visitante.jpg',
            'password'  => bcrypt('123'),
            'status'    => 1
        ]);

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Usuário Usuário Visitante,  criado com sucesso!!!');
    }
}
