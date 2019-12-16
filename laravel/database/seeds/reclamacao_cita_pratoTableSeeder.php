<?php

use Illuminate\Database\Seeder;

class reclamacao_cita_pratoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reclamacao_cita_prato')->insert(
            [
                [
                    'id_reclamacao' => '1',
                    'id_prato' => '9'
                ],
                [
                    'id_reclamacao' => '2',
                    'id_prato' => '8'
                ],
                [
                    'id_reclamacao' => '5',
                    'id_prato' => '9'
                ],
                [
                    'id_reclamacao' => '7',
                    'id_prato' => '3'
                ]
            ]
        );
    }
}
