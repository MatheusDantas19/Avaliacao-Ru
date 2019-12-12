<?php

use Illuminate\Database\Seeder;

class adminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'nome' => 'teste',
            'senha' => 1234,
        ]);
    }
}
