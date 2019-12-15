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
                    'campus' => 'manaus',
                    'setor' => 'norte',
                    'local' => 'coroado'
                ],
                [
                    'campus' => 'manaus',
                    'setor' => 'sul',
                    'local' => 'coroado'
                ],
                [
                    'campus' => 'manaus',
                    'setor' => 'externo med',
                    'local' => 'centro'
                ],
                [
                    'campus' => 'humaita',
                    'setor' => 'polo do vale',
                    'local' => 'coroado'
                ],
                [
                    'campus' => 'itacotiara',
                    'setor' => 'campus1',
                    'local' => 'am-010'
                ],
                [
                    'campus' => 'itacotiara',
                    'setor' => 'campus2',
                    'local' => 'tiradentes'
                ],
                [
                    'campus' => 'parintins',
                    'setor' => 'dorval',
                    'local' => 'jacareacanga'
                ],
                [
                    'campus' => 'coari',
                    'setor' => 'multicampus',
                    'local' => 'urucu'
                ],
                [
                    'campus' => 'tabatinga',
                    'setor' => 'norte',
                    'local' => 'sede'
                ],
                [
                    'campus' => 'tabatinga',
                    'setor' => 'sul',
                    'local' => 'centro'
                ]
            ]

        );
    }
}
