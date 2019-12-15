<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Prato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PratoController extends Controller
{

    public function criarpratoGet(Request $request)
    {
        $restaurante = DB::table('admin_gerencia_restaurante')
            ->join('restaurante', 'admin_gerencia_restaurante.id_restaurante', '=', 'restaurante.id_restaurante')
            ->join('admin', 'admin_gerencia_restaurante.id_admin', '=', 'admin.id_admin')
            ->select('restaurante.id_restaurante', 'restaurante.campus', 'restaurante.setor', 'restaurante.local')
            ->where('admin_gerencia_restaurante.id_admin', '=', $request->session()->get('id_admin'))
            ->get();
        $ingrediente = DB::table('ingrediente')
            ->get();
        return view('prato.criarprato', ['restaurante' => $restaurante, 'ingrediente' => $ingrediente]);
    }
    public function criarpratoPost(Request $request)
    {
        $ingredientes = $request->ingrediente;
        var_dump($ingredientes);
        $prato = Prato::create($request->all());
        foreach ($ingredientes as $ingred) {
            DB::table('prato_contem_ingrediente')
                ->insert([
                    "id_prato" => $prato->id, "id_ingrediente" => $ingred
                ]);
        }
        $turno = $request->turno;
        $dia_semana = $request->dia_semana;
        DB::table('restaurante_serve_prato')
            ->insert([
                "turno" => $turno, "dia_semana" => $dia_semana, "id_restaurante"=>$request->restaurante,
                "id_prato"=>$prato->id
            ]);
    }
    public function pratos(Request $request)
    {
        return view("prato.pratos");
    }



    public function deleteGet(Request $request)
    {
        if ($request->session()->exists('loginAdmin')) {
            $mensagem = $request->session()->get('mensagem');
            $ings = DB::table('prato')->get();
            $restaurante = DB::table('admin_gerencia_restaurante')
                ->join('restaurante', 'admin_gerencia_restaurante.id_restaurante', '=', 'restaurante.id_restaurante')
                ->join('admin', 'admin_gerencia_restaurante.id_admin', '=', 'admin.id_admin')
                ->select('restaurante.id_restaurante', 'restaurante.campus', 'restaurante.setor', 'restaurante.local')
                ->where('admin_gerencia_restaurante.id_admin', '=', $request->session()->get('id_admin'))
                ->get();
            return view("prato.deleteprato", compact(["mensagem", "restaurante", 'ings']));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function deletePost(Request $request)
    {
        if ($request->session()->exists('loginAdmin')) {
            $id_prato =  $request->id_prato;
            DB::table('prato')
                ->where('id_prato', $id_prato)
                ->delete();
            $mensagem = $request->session()->flash('mensagem', 'prato excluido com sucesso');
            return redirect("/deleteprato");
        } else {
            return redirect('/loginAdmin');
        }
    }
}
