<?php

use Illuminate\Database\Seeder;

class aluno_abre_reclamacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('aluno_abre_reclamacao')->insert(
            [
                [
                    'matricula' => '21754445',
                    'id_reclamacao' => '1',
                    'data' =>'2019-12-11  12:12:12'
                    
                ],
                [
                    'matricula' => '21750861',
                    'id_reclamacao' => '2',
                    'data' =>'2019-12-11  12:12:12'
                ],
                [
                    'matricula' => '21759999',
                    'id_reclamacao' => '3',
                    'data' =>'2019-12-11  12:12:12'
                ],
                [
                    'matricula' => '21753748',
                    'id_reclamacao' => '4',
                    'data' =>'2019-12-11  12:12:12'
                ],
                [
                    'matricula' => '21750000',
                    'id_reclamacao' => '5',
                    'data' =>'2019-12-11  12:12:12'
                ],
                [
                    'matricula' => '21751111',
                    'id_reclamacao' => '6',
                    'data' =>'2019-12-11  12:12:12'
                ],
                [
                    'matricula' => '21752222',
                    'id_reclamacao' => '7',
                    'data' =>'2019-12-11  12:12:12'
                ],
                [
                    'matricula' => '21758798',
                    'id_reclamacao' => '8',
                    'data' =>'2019-12-11  12:12:12'
                ],
                [
                    'matricula' => '21753348',
                    'id_reclamacao' => '9',
                    'data' =>'2019-12-11  12:12:12'
                ]
            ]
        );
    }
}
