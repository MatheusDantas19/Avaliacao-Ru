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
                    'nome' => 'Café',
                    'descricao' => 'Pó de café'
                ],
                [
                    'nome' => 'Leite',
                    'descricao' => 'leite de vaca integral'
                ],
                [
                    'nome' => 'Achocolatado',
                    'descricao' => 'Chocolate em pó adoçado'
                ],
                [
                    'nome' => 'Açucar',
                    'descricao' => 'Açucar cristal refinado'
                ],
                [
                    'nome' => 'Pão',
                    'descricao' => 'Pão assado de massa fina'
                ],
                [
                    'nome' => 'Manteiga',
                    'descricao' => 'Manteiga de vaca com sal'
                ],
                [
                    'nome' => 'Arroz',
                    'descricao' => 'Arroz branco tipo 1'
                ],
                [
                    'nome' => 'Cebola',
                    'descricao' => 'Cebola branca'
                ],
                [
                    'nome' => 'Alho',
                    'descricao' => 'Alho branco comum'
                ],
                [
                    'nome' => 'Sal',
                    'descricao' => 'Sal Branco Comum'
                ],
                [
                    'nome' => 'Feijão',
                    'descricao' => 'Feijão carioca comum'
                ],
                [
                    'nome' => 'Abóbora',
                    'descricao' => 'Abóbora regional'
                ],
                [
                    'nome' => 'Tomate',
                    'descricao' => 'Tomate de salada'
                ],
                [
                    'nome' => 'Carne de Soja',
                    'descricao' => 'Carne de soja pronta'
                ],
                [
                    'nome' => 'Carne de vaca',
                    'descricao' => 'Corte de Carne Bovino'
                ],
                [
                    'nome' => 'Macarrão',
                    'descricao' => 'Macarrão spaguetti numero 8'
                ]
            ]
        );
    }
}
