<?php

namespace App\Http\Controllers;

use App\Admin;
use DateTime;
use App\Resposta;
use App\Reclamacao_Denuncia_Res;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RespostaController extends Controller
{
    public function createGet(Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $id_admin = $request->session()->get('id_admin');
            $reclamacoes = DB::table('admin_gerencia_restaurante')
            ->join('restaurante','admin_gerencia_restaurante.id_restaurante','=','restaurante.id_restaurante')
            ->join('reclamacao_denuncia_res','restaurante.id_restaurante','=','reclamacao_denuncia_res.id_restaurante')
            ->join('reclamacao','reclamacao_denuncia_res.id_reclamacao','=','reclamacao.id_reclamacao')
            ->where('admin_gerencia_restaurante.id_admin',$id_admin)->get();
            return view("resposta.create", compact('reclamacoes'));
        } else {
            return redirect('/loginAdmin');
        }
    }
}
