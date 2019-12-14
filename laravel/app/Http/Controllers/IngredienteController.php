<?php

namespace App\Http\Controllers;

use App\Ingrediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngredienteController extends Controller{

    public function createGet (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $mensagem = $request->session()->get('mensagem');
            return view("ingrediente.create", compact("mensagem"));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function createPost (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $nome = $request->nome;
            $descricao = $request->descricao;
            $ingrediente = DB::table('ingrediente')
                                ->where('nome',$nome)
                                ->where('descricao',$descricao)
                                ->first();
            if($ingrediente){
                $mensagem = $request->session()->flash('mensagem','ingrediente já cadastrado, verifique suas entradas');
                return redirect('/createIngrediente');
            } else{
                $inserido = Ingrediente::create($request->all());
                $mensagem = $request->session()->flash('mensagem','ingrediente inserido');
                return redirect('/createIngrediente');
            }
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function updateGet (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $mensagem = $request->session()->get('mensagem');
            $ings = DB::table('ingrediente')->get();
            return view("ingrediente.update", compact(["mensagem",'ings']));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function updatePost (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $nome = $request->nome;
            $descricao = $request->descricao;
            $id_ingrediente = $request->id_ingrediente;
            $ingrediente = DB::table('ingrediente')
                                ->where('nome',$nome)
                                ->where('descricao',$descricao)
                                ->first();
            if($ingrediente){
                $mensagem = $request->session()->flash('mensagem','ingrediente já cadastrado, verifique suas entradas');
                    return redirect('/updateIngrediente');
            } else {
                $affected = DB::table('ingrediente')
                                ->where('id_ingrediente',$id_ingrediente)
                                ->update(['nome'=>$nome,'descricao'=>$descricao]);
                $mensagem = $request->session()->flash('mensagem','ingrediente atualizado');
                return redirect('/updateIngrediente');
            }
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function deleteGet (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $mensagem = $request->session()->get('mensagem');
            $ings = DB::table('ingrediente')->get();
            return view("ingrediente.delete", compact(["mensagem",'ings']));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function deletePost (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $id_ingrediente =  $request->id_ingrediente;
            DB::table('ingrediente')
                ->where('id_ingrediente',$id_ingrediente)
                ->delete();
            $mensagem = $request->session()->flash('mensagem','ingrediente excluido com sucesso');
            return redirect("/deleteIngrediente");
        } else {
            return redirect('/loginAdmin');
        }
    }
}
