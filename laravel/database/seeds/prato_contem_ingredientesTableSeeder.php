<?php

use Illuminate\Database\Seeder;

class prato_contem_ingredienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('prato_contem_ingrediente')->insert(
            [
                [
                   'id_prato' => '1',
                   'id_ingrediente' => '1'
                ],
                [
                    'id_prato' => '1',
                    'id_ingrediente' => '2'
                ],
                [
                    'id_prato' => '2',
                    'id_ingrediente' => '2'
                ],
                [
                    'id_prato' => '2',
                    'id_ingrediente' => '3'
                ],
                [
                    'id_prato' => '3',
                    'id_ingrediente' => '5'
                ],
                [
                    'id_prato' => '3',
                    'id_ingrediente' => '6'
                ],
                [
                    'id_prato' => '4',
                    'id_ingrediente' => '7'
                ],
                [
                    'id_prato' => '4',
                    'id_ingrediente' => '8'
                ],
                [
                    'id_prato' => '4',
                    'id_ingrediente' => '9'
                ],
                [
                    'id_prato' => '4',
                    'id_ingrediente' => '10'
                ],
                [
                    'id_prato' => '5',
                    'id_ingrediente' => '11'
                ],
                [
                    'id_prato' => '5',
                    'id_ingrediente' => '8'
                ],
                [
                    'id_prato' => '5',
                    'id_ingrediente' => '9'
                ],
                [
                    'id_prato' => '5',
                    'id_ingrediente' => '10'
                ],
                [
                    'id_prato' => '5',
                    'id_ingrediente' => '12'
                ],
                [
                    'id_prato' => '5',
                    'id_ingrediente' => '13'
                ],
                [
                    'id_prato' => '6',
                    'id_ingrediente' => '16'
                ],
                [
                    'id_prato' => '6',
                    'id_ingrediente' => '8'
                ],
                [
                    'id_prato' => '6',
                    'id_ingrediente' => '10'
                ],
                [
                    'id_prato' => '6',
                    'id_ingrediente' => '13'
                ],
                [
                    'id_prato' => '7',
                    'id_ingrediente' => '14'
                ],
                [
                    'id_prato' => '7',
                    'id_ingrediente' => '10'
                ],
                [
                    'id_prato' => '7',
                    'id_ingrediente' => '8'
                ],
                [
                    'id_prato' => '7',
                    'id_ingrediente' => '13'
                ],
                [
                    'id_prato' => '8',
                    'id_ingrediente' => '15'
                ],
                [
                    'id_prato' => '8',
                    'id_ingrediente' => '10'
                ],
                [
                    'id_prato' => '8',
                    'id_ingrediente' => '8'
                ],
                [
                    'id_prato' => '8',
                    'id_ingrediente' => '13'
                ],
                [
                    'id_prato' => '9',
                    'id_ingrediente' => '16'
                ],
                [
                    'id_prato' => '9',
                    'id_ingrediente' => '10'
                ],
                [
                    'id_prato' => '9',
                    'id_ingrediente' => '11'
                ],
                [
                    'id_prato' => '9',
                    'id_ingrediente' => '9'
                ],
                [
                    'id_prato' => '9',
                    'id_ingrediente' => '12'
                ],
                [
                    'id_prato' => '9',
                    'id_ingrediente' => '8'
                ],
                [
                    'id_prato' => '9',
                    'id_ingrediente' => '13'
                ],
                [
                    'id_prato' => '10',
                    'id_ingrediente' => '16'
                ],
                [
                    'id_prato' => '10',
                    'id_ingrediente' => '15'
                ],
                [
                    'id_prato' => '10',
                    'id_ingrediente' => '13'
                ],
                [
                    'id_prato' => '10',
                    'id_ingrediente' => '12'
                ],
                [
                    'id_prato' => '10',
                    'id_ingrediente' => '11'
                ],
                [
                    'id_prato' => '10',
                    'id_ingrediente' => '10'
                ],
                [
                    'id_prato' => '10',
                    'id_ingrediente' => '9'
                ],
                [
                    'id_prato' => '10',
                    'id_ingrediente' => '8'
                ]
            ]
        );
    }
}
