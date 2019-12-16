<?php

use Illuminate\Database\Seeder;

class respostaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('resposta')->insert(
            [
                [
                    'status' => '1',
                    'descricao' => 'Pedimos perdão pelo ocorrido, mas tivessemos um problema com um fogão que fez com que não fosse possivel esquentar a comida rapidamente'
                ],
                [
                    'status' => '1',
                    'descricao' => 'tivemos um incidente com um cachorro no salão, oque fez com que tivessemos que lavar o salão pouco antes do almoço'
                ],
                [
                    'status' => '1',
                    'descricao' => 'Sentimos muito pelo ocorrido, mas tentaremos manter pelo menos 3 opçoes vegetarianas'
                ],
                [
                    'status' => '1',
                    'descricao' => 'Sentimos pelo ocorrido, iremos verificar esse ocorrido para que não aconteça novamente'
                ],
                [
                    'status' => '1',
                    'descricao' => 'iremos manter a comida com menos sal e saches nas mesas para quem preferir mais salgada'
                ],
                [
                    'status' => '1',
                    'descricao' => 'As opções de salada variam entre as cozidas e cruas'
                ]
            ]

        );
    }
}
