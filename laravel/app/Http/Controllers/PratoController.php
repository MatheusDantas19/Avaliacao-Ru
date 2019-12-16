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
        if ($request->session()->exists('loginAdmin')) {
            $restaurante = DB::table('admin_gerencia_restaurante')
                ->join('restaurante', 'admin_gerencia_restaurante.id_restaurante', '=', 'restaurante.id_restaurante')
                ->join('admin', 'admin_gerencia_restaurante.id_admin', '=', 'admin.id_admin')
                ->select('restaurante.id_restaurante', 'restaurante.campus', 'restaurante.setor', 'restaurante.local')
                ->where('admin_gerencia_restaurante.id_admin', '=', $request->session()->get('id_admin'))
                ->get();

            $ingrediente = DB::table('ingrediente')->get();
            $mensagem = $request->session()->get("mensagem");
            return view('prato.criarprato', ['restaurante' => $restaurante, 'ingrediente' => $ingrediente], compact("mensagem"));
        } else {
            return redirect("/");
        }
    }
    public function criarpratoPost(Request $request)
    {
        if ($request->session()->exists('loginAdmin')) {
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
                    "turno" => $turno, "dia_semana" => $dia_semana, "id_restaurante" => $request->restaurante,
                    "id_prato" => $prato->id
                ]);
            $mensagem = $request->session()->flash('mensagem', 'Prato cadastrado com sucesso');
            return redirect('/criarprato');
        } else {
            return redirect('/');
        }
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
            $prato = DB::table('admin_gerencia_restaurante')
                ->join('restaurante', 'admin_gerencia_restaurante.id_restaurante', '=', 'restaurante.id_restaurante')
                ->join('admin', 'admin_gerencia_restaurante.id_admin', '=', 'admin.id_admin')
                ->join('restaurante_serve_prato', 'restaurante_serve_prato.id_restaurante', '=', 'admin_gerencia_restaurante.id_admin')
                ->join('prato', 'restaurante_serve_prato.id_prato', '=', 'prato.id_prato')
                ->where('admin_gerencia_restaurante.id_admin', '=', $request->session()->get('id_admin'))
                ->get();
            return view("prato.deleteprato", compact(["mensagem", "restaurante", "prato",'ings']));
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

    public function pratosGet(Request $request)
    {
        if ($request->session()->exists('login')) {

            $pratos = null;
            if ($request->session()->exists('restaurante')) {
                $restaurante = $request->session()->get('restaurante');
                $opcao = $restaurante;
                $turno = $request->session()->get('turno');
                $dia = $request->session()->get('dia');
                $pratos = DB::table('restaurante_serve_prato')
                    ->join('prato', 'restaurante_serve_prato.id_prato', '=', 'prato.id_prato')
                    // ->join('prato_contem_ingrediente', 'prato.id_prato', '=', 'prato_contem_ingrediente.id_prato')
                    //->join('ingrediente', 'prato_contem_ingrediente.id_ingrediente', '=', 'ingrediente.id_ingrediente')
                    ->where('restaurante_serve_prato.id_restaurante', '=', $restaurante)
                    ->where('restaurante_serve_prato.turno', '=', $turno)
                    ->where('restaurante_serve_prato.dia_semana', '=', $dia)
                    ->get();

                // echo '<pre>';
                // print_r($pratos);
                // echo '</pre>';
            }

            $restaurante = DB::table("restaurante")->get();

            return view('prato.pratos', [
                'restaurante' => $restaurante
            ], compact('pratos'));
        } else {
            return redirect("/");
        }
    }

    public function pratosPost(Request $request)
    {
        if ($request->session()->exists('login')) {
            $restaurante = $request->restaurante;
            $turno = $request->turno;
            $dia = $request->dia;

            $request->session()->flash('restaurante', $restaurante);
            $request->session()->flash('turno', $turno);
            $request->session()->flash('dia', $dia);

            return redirect('/pratos');
        } else {
            return redirect("/");
        }
    }
}
