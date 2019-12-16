<?php

use Illuminate\Database\Seeder;

class reclamacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reclamacao')->insert(
            [
                [
                    'data_ocorrencia' => '2019-12-15 12:53:22',
                    'categoria' => 'Comida',
                    'descricao' => 'O feijão não estava cozido'
                ],
                [
                    'data_ocorrencia' => '2019-11-12 15:33:22',
                    'categoria' => 'Comida',
                    'descricao' => 'A comida estava extremamente fria'
                ],
                [
                    'data_ocorrencia' => '2019-12-15 13:52:09',
                    'categoria' => 'limpeza',
                    'descricao' => 'O restaurante estava com um cheiro forte de agua sanitaria'
                ],
                [
                    'data_ocorrencia' => '2019-09-05 17:15:28',
                    'categoria' => 'Comida',
                    'descricao' => 'Não tinha nenhuma opção vegetariana no cardapio de hoje'
                ],
                [
                    'data_ocorrencia' => '2019-12-15 12:53:22',
                    'categoria' => 'Comida',
                    'descricao' => 'O feijão estava um pouco cru'
                ],
                [
                    'data_ocorrencia' => '2019-12-15 13:52:09',
                    'categoria' => 'Comida',
                    'descricao' => 'A maionese estava com cheiro de comida azeda'
                ],
                [
                    'data_ocorrencia' => '2019-11-12 15:33:22',
                    'categoria' => 'Comida',
                    'descricao' => 'A carne estava muito salgada, tive problemas de pressão alta'
                ],
                [
                    'data_ocorrencia' => '2019-12-12 11:39:21',
                    'categoria' => 'Comida',
                    'descricao' => 'Coloquem opçoes de salada cozida'
                ],
                [
                    'data_ocorrencia' => '2019-12-11 12:33:22',
                    'categoria' => 'Comida',
                    'descricao' => 'tive Problemas intestinais depois de almoçar'
                ]
            ]

        );
    }
}
