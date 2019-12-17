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
            $sql = 'SELECT DISTINCT(nome), COUNT(id_reclamacao) as count FROM prato,reclamacao_cita_prato
            WHERE prato.id_prato = reclamacao_cita_prato.id_prato 
            GROUP BY(nome)
            ORDER BY 1 DESC';// HAVING prato.id_prato = reclamacao_cita_prato.id_prato';
            // ORDER BY()
            $pratos = DB::select($sql);
            // $pratos = DB::table('reclamacao_cita_prato')
            // ->join('prato','reclamacao_cita_prato.id_prato','=','prato.id_prato')
            // ->select('reclamacao_cita_prato.id_prato','nome')
            // ->groupBy('prato.id_prato','nome')
            // ->get();
            return view('relatorio.relatorio1',['pratos' => $pratos]);
        }else{

        }
    }

    public function relatorio1Post(Request $request){
        if($request->session()->exists('loginAdmin')){

        }else{
            
        }
        
    }

    public function relatorio2Get(Request $request){
        if($request->session()->exists('loginAdmin')){
            return view('relatorio.relatorio2');

        }else{
            
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
