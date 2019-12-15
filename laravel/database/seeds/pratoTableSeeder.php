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
                    'nome' => 'escondinho de frango',
                    //'descricao' => '',
                    'classificacao' => 'normal'
                ],
                [
                    'nome' => 'bife a cavalo',
                    //'descricao' => 'sul',
                    'classificacao' => 'normal'
                ],
                [
                    'nome' => 'escondinho de frango',
                    //'descricao' => 'norte',
                    'classificacao' => 'normal'
                ],
                [
                    'nome' => 'cafe com leite integral',
                    //'descricao' => 'norte',
                    'classificacao' => 'normal'
                ],
                [
                    'nome' => 'cafe com leite integral achocolatado',
                    //'descricao' => 'norte',
                    'classificacao' => 'normal'
                ],
                [
                    'nome' => 'escondidinho de lentinha',
                    //'descricao' => 'norte',
                    'classificacao' => 'vegetariano'
                ],
                [
                    'nome' => 'steak de frango assado no forno',
                    //'descricao' => 'norte',
                    'classificacao' => 'normal'
                ],
                [
                    'nome' => 'soja reforgada',
                    //'descricao' => 'norte',
                    'classificacao' => 'vegetariano'
                ],
                [
                    'nome' => 'feijoada completa',
                    //'descricao' => 'norte',
                    'classificacao' => 'normal'
                ],
                [
                    'nome' => 'peixe',
                    //'descricao' => 'norte',
                    'classificacao' => 'normal'
                ]
            ]
        );
    }
}
