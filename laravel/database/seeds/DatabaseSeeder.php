<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        adminTableSeeder::class,
        ingredienteTableSeeder::class,
        pratoTableSeeder::class,
        reclamacaoTableSeeder::class,
        respostaTableSeeder::class,
        restauranteTableSeeder::class
        ]);
    }
}
