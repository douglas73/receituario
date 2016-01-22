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
        $this->call(TipoDocumentoTableSeeder::class);
        $this->call(PacienteTableSeeder::class);
        $this->call(TypeUserTableSeeder::class);
        $this->call(MenuTableSeeder::class);

        Model::reguard();
    }
}
