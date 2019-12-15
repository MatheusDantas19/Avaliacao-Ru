<?php

use Illuminate\Database\Seeder;

class pratoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prato')->insert(
            [

                [
                    'nome' => 'Escondinho de frango',
                    //'descricao' => '',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'Bife a cavalo',
                    //'descricao' => 'sul',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'Escondinho de carne',
                    //'descricao' => 'norte',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'Cafe com leite integral',
                    //'descricao' => 'norte',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'Cafe com leite integral achocolatado',
                    //'descricao' => 'norte',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'Escondidinho de lentinha',
                    //'descricao' => 'norte',
                    'classificacao' => 'Vegetariano'
                ],
                [
                    'nome' => 'Steak de frango assado no forno',
                    //'descricao' => 'norte',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'soja reforgada',
                    //'descricao' => 'norte',
                    'classificacao' => 'Vegetariano'
                ],
                [
                    'nome' => 'Feijoada completa',
                    //'descricao' => 'norte',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'Peixe',
                    //'descricao' => 'norte',
                    'classificacao' => 'normal'
                ]
            ]
        );
    }
}
