<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(adminTableSeeder::class);
         $this->call(alunoTableSeeder::class);
         $this->call(ingredienteTableSeeder::class);
         $this->call(pratoTableSeeder::class);
         $this->call(reclamacaoTableSeeder::class);
         $this->call(respostaTableSeeder::class);
         $this->call(restauranteTableSeeder::class);
         $this->call(aluno_abre_reclamacaoTableSeeder::class);
         $this->call(prato_contem_ingredienteTableSeeder::class);
         $this->call(resposta_responde_reclamacaoTableSeeder::class);
         $this->call(admin_gerencia_restauranteTableSeeder::class);
         $this->call(reclamacao_cita_pratoTableSeeder::class);
         $this->call(reclamacao_denuncia_resTableSeeder::class);
         $this->call(restaurante_serve_pratoTableSeeder::class);
    }
}
