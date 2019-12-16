<?php

use Illuminate\Database\Seeder;

class reclamacao_denuncia_resTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reclamacao_denuncia_res')->insert(
            [
                [
                    'id_reclamacao' => '1',
                    'id_restaurante' => '5'
                ],
                [
                    'id_reclamacao' => '2',
                    'id_restaurante' => '3'
                ],
                [
                    'id_reclamacao' => '3',
                    'id_restaurante' => '1'
                ],
                [
                    'id_reclamacao' => '4',
                    'id_restaurante' => '5'
                ],
                [
                    'id_reclamacao' => '5',
                    'id_restaurante' => '4'
                ],
                [
                    'id_reclamacao' => '6',
                    'id_restaurante' => '10'
                ],
                [
                    'id_reclamacao' => '7',
                    'id_restaurante' => '6'
                ],
                [
                    'id_reclamacao' => '8',
                    'id_restaurante' => '2'
                ],
                [
                    'id_reclamacao' => '9',
                    'id_restaurante' => '10'
                ]
            ]
        );
    }
}
