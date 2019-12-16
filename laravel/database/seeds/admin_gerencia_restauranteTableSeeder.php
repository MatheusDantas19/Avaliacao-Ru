<?php

use Illuminate\Database\Seeder;

class admin_gerencia_restauranteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_gerencia_restaurante')->insert(
            [
                [
                    'id_admin' => '4',
                    'id_restaurante' => '1',

                ],
                [
                    'id_admin' => '3',
                    'id_restaurante' => '2'
                ],
                [
                    'id_admin' => '2',
                    'id_restaurante' => '3'
                ],
                [
                    'id_admin' => '5',
                    'id_restaurante' => '4'
                ],
                [
                    'id_admin' => '4',
                    'id_restaurante' => '5'
                ],
                [
                    'id_admin' => '3',
                    'id_restaurante' => '6'
                ],
                [
                    'id_admin' => '2',
                    'id_restaurante' => '7'
                ],
                [
                    'id_admin' => '5',
                    'id_restaurante' => '8'
                ],
                [
                    'id_admin' => '3',
                    'id_restaurante' => '9'
                ],
                [
                    'id_admin' => '2',
                    'id_restaurante' => '10'
                ]
            ]
        );
    }
}
