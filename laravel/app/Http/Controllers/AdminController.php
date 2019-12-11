<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function loginAdminGet(Request $request){
        $mensagem = $request->session()->get('mensagem');
        return view('admin.login', compact('mensagem'));
    }

    public function loginAdminPost (Request $request){
        $admin = Admin::where('nome', $request->nome)->where('senha', $request->senha)->first();
        if($admin){
            $request->session()->put('loginAdmin', '$request->nome');

            return redirect('/mainAdmin');
        }
        else{
            $mensagem = $request->session()->flash('mensagem', 'Dados de login incorretos!');
            return redirect('/loginAdmin');
        }
    }

    public function logout (Request $request){
        if ($request->session()->exists('loginAdmin')){
            $request->session()->forget('login');
            return redirect('/');
        }
        else{
            return redirect('/');
        }

    }

    public function cadastroAdminGet (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $mensagem = $request->session()->get('mensagem');
            return view("admin.cadastro", compact("mensagem"));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function cadastroAdminPost (Request $request){
        if ($request->session()->exists('loginAdmin')){
            $nome = $request->nome;
            $senha = $request->senha;
            if($nome and $senha){
                $admin = Admin::create($request->all());
                $mensagem = $request->session()->flash('mensagem', 'Administrador cadastrado com sucesso');
                return redirect('/cadastroAdmin');
            }
            else{
                $mensagem = $request->session()->flash('mensagem', 'Os dados não podem estar em branco!');
                return redirect('/cadastroAdmin');
            }
        }
        else{
            redirect('/loginAdmin');
        }
    }


    public function main(Request $request){
        if ($request->session()->exists('loginAdmin')) {
            return view("admin.main", ['nome','$request=>loginAdmin']);
        } else {
            return redirect('/loginAdmin');
        }
    }
}
