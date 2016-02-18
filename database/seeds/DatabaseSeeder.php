<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(CategoriaMedicacaoTableSeeder::class);
        $this->call(MedicacaoTableSeeder::class);
        $this->call(DocumentoTipoTableSeeder::class);
        $this->call(PacienteTableSeeder::class);
        $this->call(TypeUserTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(DocumentoTemplateTableSeeder::class);
        factory('App\Paciente', 100)->create();

        Model::reguard();
    }
}
