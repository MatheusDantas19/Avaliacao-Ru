<?php

use Illuminate\Database\Seeder;

class restauranteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('restaurante')->insert(
            [
                [
                    'campus' => 'Manaus',
                    'setor' => 'Norte',
                    'local' => 'Coroado'
                ],
                [
                    'campus' => 'Manaus',
                    'setor' => 'Sul',
                    'local' => 'Coroado'
                ],
                [
                    'campus' => 'Manaus',
                    'setor' => 'Externo medicina',
                    'local' => 'Centro'
                ],
                [
                    'campus' => 'Humaita',
                    'setor' => 'Polo do vale',
                    'local' => 'Coroado'
                ],
                [
                    'campus' => 'Itacotiara',
                    'setor' => 'Campus1',
                    'local' => 'Am-010'
                ],
                [
                    'campus' => 'Itacotiara',
                    'setor' => 'Campus2',
                    'local' => 'Tiradentes'
                ],
                [
                    'campus' => 'Parintins',
                    'setor' => 'Dorval',
                    'local' => 'Jacareacanga'
                ],
                [
                    'campus' => 'Coari',
                    'setor' => 'Multicampus',
                    'local' => 'Urucu'
                ],
                [
                    'campus' => 'Tabatinga',
                    'setor' => 'Norte',
                    'local' => 'Sede'
                ],
                [
                    'campus' => 'Tabatinga',
                    'setor' => 'Sul',
                    'local' => 'Centro'
                ]
            ]

        );
    }
}
