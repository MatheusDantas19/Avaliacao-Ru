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
        $this->call(adminTableSeeder::class);
        $this->call(alunoTableSeeder::class);
        $this->call(ingredienteTableSeeder::class);
        $this->call(pratoTableSeeder::class);
        $this->call(restauranteTableSeeder::class);

    }
}
