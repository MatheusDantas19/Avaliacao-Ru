<?php

use Illuminate\Database\Seeder;

class admin_elabora_respostaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_elabora_resposta')->insert(
            [
                [
                    'id_admin' => '2',
                    'id_resposta' => '1',
                    'data' => '2019-12-17 08:59:00'
                ],
                [
                    'id_admin' => '4',
                    'id_resposta' => '2',
                    'data' => '2019-12-17 08:59:00'
                ],
                [
                    'id_admin' => '4',
                    'id_resposta' => '3',
                    'data' => '2019-12-17 08:59:00'
                ],
                [
                    'id_admin' => '5',
                    'id_resposta' => '4',
                    'data' => '2019-12-17 08:59:00'
                ],
                [
                    'id_admin' => '3',
                    'id_resposta' => '5',
                    'data' => '2019-12-17 08:59:00'
                ],
                [
                    'id_admin' => '3',
                    'id_resposta' => '6',
                    'data' => '2019-12-17 08:59:00'
                ]
            ]
        );
    }
}
