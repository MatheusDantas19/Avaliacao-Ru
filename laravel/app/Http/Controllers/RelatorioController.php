<?php

namespace App\Http\Controllers;

use App\Aluno;
use DateTime;
use App\Reclamacao;
use App\Reclamacao_Denuncia_Res;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{
    public function relatorio1Get(Request $request){
        if($request->session()->exists('loginAdmin')){
            $sql =
            'SELECT COUNT(ingrediente.id_ingrediente) as qtd_reclamacao ,ingrediente.*
            FROM ingrediente
            JOIN prato_contem_ingrediente ON ingrediente.id_ingrediente = prato_contem_ingrediente.id_ingrediente
            LEFT JOIN reclamacao_cita_prato ON prato_contem_ingrediente.id_prato = reclamacao_cita_prato.id_prato
            WHERE reclamacao_cita_prato.id_reclamacao IS NOT NULL
            GROUP BY ingrediente.id_ingrediente HAVING ingrediente.nome IS NOT null
            ORDER BY qtd_reclamacao DESC
            ';

            $pratos = DB::select($sql);


            return view('relatorio.relatorio1',['pratos' => $pratos]);
        }else{
            return redirect('/loginAdmin');
        }
    }

    public function relatorio1Post(Request $request){
        if($request->session()->exists('loginAdmin')){

        }else{

        }

    }

    public function relatorio2Get(Request $request){
        if($request->session()->exists('loginAdmin')){
            $sql =
            'SELECT COUNT(admin_gerencia_restaurante.id_admin) as qtd_reclamacoes,  admin_gerencia_restaurante.id_admin

            FROM reclamacao
            JOIN reclamacao_denuncia_res on reclamacao_denuncia_res.id_reclamacao = reclamacao.id_reclamacao
            JOIN admin_gerencia_restaurante on reclamacao_denuncia_res.id_restaurante = admin_gerencia_restaurante.id_restaurante
            LEFT JOIN resposta_responde_reclamacao on reclamacao.id_reclamacao = resposta_responde_reclamacao.id_reclamacao
            WHERE resposta_responde_reclamacao.id_resposta IS NULL
            GROUP BY admin_gerencia_restaurante.id_admin
            ORDER BY qtd_reclamacoes DESC
            ';

            $pratos = DB::select($sql);


            return view('relatorio.relatorio2',['pratos' => $pratos]);
        }else{
            return redirect('/loginAdmin');
        }

    }

    public function relatorio2Post(Request $request){
        if($request->session()->exists('loginAdmin')){

        }else{

        }

    }

    public function relatorio3Get(Request $request){
        if($request->session()->exists('loginAdmin')){
            return view('relatorio.relatorio3');

        }else{

        }

    }

    public function relatorio3Post(Request $request){
        if($request->session()->exists('loginAdmin')){

        }else{

        }

    }
}
