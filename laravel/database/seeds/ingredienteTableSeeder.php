<?php

use Illuminate\Database\Seeder;

class ingredienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ingrediente')->insert(
            [
                [
                    'nome' => 'Sal',
                    'descricao' => 'Sal Branco Comum'
                ],
                [
                    'nome' => 'Tomate',
                    'descricao' => 'Tomate maduro'
                ],
                [
                    'nome' => 'Extrato de Tomate',
                    'descricao' => 'Molho de Tomate para macarrão e carnes'
                ],
                [
                    'nome' => 'Açucar',
                    'descricao' => 'Açucar Branco Comum'
                ],
                [
                    'nome' => 'Macarão',
                    'descricao' => 'Massa de macarão'
                ],
                [
                    'nome' => 'Arroz',
                    'descricao' => 'Arroz Branco Integral'
                ],
                [
                    'nome' => 'Osso Buco',
                    'descricao' => 'carne Bovina para cozinhar'
                ],
                [
                    'nome' => 'Ovo',
                    'descricao' => 'Ovo de galinha'
                ],
                [
                    'nome' => 'Oléo',
                    'descricao' => 'Oléo de Soja'
                ],
                [
                    'nome' => 'Feijão Carioca',
                    'descricao' => ''
                ],
                [
                    'nome' => 'leite',
                    'descricao' => 'leite de vaca integral'
                ],
                [
                    'nome' => 'Chocolate em pó',
                    'descricao' => ''
                ],
                [
                    'nome' => 'Frango',
                    'descricao' => 'Carne de Frango'
                ],
                [
                    'nome' => 'Café',
                    'descricao' => 'Pó de Café'
                ],
                [
                    'nome' => 'Soja',
                    'descricao' => ''
                ],
                [
                    'nome' => 'Carne de Porco',
                    'descricao' => 'Carne Suina'
                ],
                [
                    'nome' => 'Peixe',
                    'descricao' => ''
                ],
                [
                    'nome' => 'Carne',
                    'descricao' => ''
                ]
            ]
        );
    }
}
