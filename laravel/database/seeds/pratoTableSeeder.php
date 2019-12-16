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
                    'nome' => 'Cafe com leite',
                    'descricao' => 'Café preto com leite integral',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'Achocolatado',
                    'descricao' => 'Leite Integral com Achocolatado',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'Pão com Manteiga',
                    'descricao' => 'Pão com manteiga chapeado',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'Arroz',
                    'descricao' => 'Arroz Comum cozido com refogado de alho e cebola',
                    'classificacao' => 'Vegetariano'
                ],
                [
                    'nome' => 'Feijão',
                    'descricao' => 'Feijão cozido com legumes',
                    'classificacao' => 'Vegetariano'
                ],
                [
                    'nome' => 'Macarrão',
                    'descricao' => 'Macarrão cozido com cebola e pimentão refogados',
                    'classificacao' => 'Vegetariano'
                ],
                [
                    'nome' => 'Proteina vegetal',
                    'descricao' => 'Iscas de carne de soja no refogado de tomate',
                    'classificacao' => 'Vegetariano'
                ],
                [
                    'nome' => 'Bife',
                    'descricao' => 'Carne de vaca corta em bifes chapeada com cebola',
                    'classificacao' => 'Normal'
                ],
                [
                    'nome' => 'Sopa de legumes',
                    'descricao' => 'Macarrão cozido no caldo de legumes',
                    'classificacao' => 'Vegetariano'
                ],
                [
                    'nome' => 'Sopa de Carne',
                    'descricao' => 'Macarrão cozido no caldo de legumes com carne',
                    'classificacao' => 'Normal'
                ],

            ]
        );
    }
}
