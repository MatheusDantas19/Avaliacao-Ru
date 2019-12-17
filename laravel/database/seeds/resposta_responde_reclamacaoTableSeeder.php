<?php

use Illuminate\Database\Seeder;

class resposta_responde_reclamacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('resposta_responde_reclamacao')->insert(
            [

                [
                    'id_reclamacao' => '2',
                    'id_resposta' => '1'
                ],
                [
                    'id_reclamacao' => '3',
                    'id_resposta' => '2'
                ],
                [
                    'id_reclamacao' => '4',
                    'id_resposta' => '3'
                ],
                [
                    'id_reclamacao' => '5',
                    'id_resposta' => '4'
                ],
                [
                    'id_reclamacao' => '7',
                    'id_resposta' => '5'
                ],
                [
                    'id_reclamacao' => '8',
                    'id_resposta' => '6'
                ]
            ]
        );
    }
}
