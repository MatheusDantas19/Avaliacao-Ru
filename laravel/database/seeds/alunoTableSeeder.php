<?php

use Illuminate\Database\Seeder;

class alunoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('aluno')->insert(
            [
                [
                    'matricula' => '21754445',
                    'nome' => 'Tanizia Fagundes',
                    'curso' => 'Engenharia de Software',
                    'senha' => '123412'
                ],
                [
                    'matricula' => '21750861',
                    'nome' => 'Matheus Inacio',
                    'curso' => 'Engenharia de Software',
                    'senha' => '12345'
                ],
                [
                    'matricula' => '21759999',
                    'nome' => 'Vinicio Hernandes',
                    'curso' => 'Engenharia de Software',
                    'senha' => '121212'
                ],
                [
                    'matricula' => '21753748',
                    'nome' => 'Kalil Silva',
                    'curso' => 'Ciência da Computação',
                    'senha' => '123456'
                ],
                [
                    'matricula' => '21750000',
                    'nome' => 'Cleyzinho Rayolzinho',
                    'curso' => 'Engenharia de Software',
                    'senha' => '12345123'
                ],
                [
                    'matricula' => '21751111',
                    'nome' => 'Jander Fagundes',
                    'curso' => 'Direito',
                    'senha' => '12345'
                ],
                [
                    'matricula' => '21752222',
                    'nome' => 'Isabela Furtado',
                    'curso' => 'Direito',
                    'senha' => '98765'
                ],
                [
                    'matricula' => '21758798',
                    'nome' => 'Patricia Leite',
                    'curso' => 'Ciência da Computação',
                    'senha' => '111111'
                ],
                [
                    'matricula' => '21753348',
                    'nome' => 'Chuck Norris',
                    'curso' => 'Engenharia de Software',
                    'senha' => '666'
                ],
                [
                    'matricula' => '21752443',
                    'nome' => 'Darth Vade',
                    'curso' => 'Engenharia Quimica',
                    'senha' => '6546'
                ]
            ]
        );
    }
}
