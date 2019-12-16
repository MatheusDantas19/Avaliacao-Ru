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
        DB::table('admin')->insert(
            [
                [
                    'nome' => 'teste',
                    'senha' => '1234'

                ],
                [
                    'nome' => 'Tanizia',
                    'senha' => '5151'
                ],
                [
                    'nome' => 'Matheus',
                    'senha' => '4141'
                ],
                [
                    'nome' => 'Kalil',
                    'senha' => '3131'
                ],
                [
                    'nome' => 'Vinicius',
                    'senha' => '2121'
                ]
            ]
        );
    }
}
