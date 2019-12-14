<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function main(Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $nome = $request->session()->get('nome');
            $id_admin = $request->session()->get('id_admin');
            return view("admin.main", compact(['nome','id_admin']));
        }
        else {
            return redirect('/loginAdmin');
        }
    }

    public function loginGet(Request $request){
        if ($request->session()->exists('loginAdmin')) {
        return redirect('/mainAdmin');
        }
        else{
            $mensagem = $request->session()->get('mensagem');
            return view('admin.login', compact('mensagem'));
        }
    }

    public function loginPost (Request $request){
        $admin = Admin::where('nome', $request->nome)->where('senha', $request->senha)->first();
        if($admin){
            $request->session()->put('loginAdmin', true);
            $request->session()->put('nome',$admin->nome);
            $request->session()->put('id_admin',$admin->id_admin);

            return redirect('/mainAdmin');
        }
        else{
            $mensagem = $request->session()->flash('mensagem', 'Dados de login incorretos!');
            return redirect('/loginAdmin');
        }
    }

    public function logout (Request $request){
        if ($request->session()->exists('loginAdmin')){
            $request->session()->flush();
            return redirect('/');
        }
        else{
            return redirect('/');
        }

    }

    public function createGet (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $mensagem = $request->session()->get('mensagem');
            return view("admin.create", compact("mensagem"));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function createPost (Request $request){
        if ($request->session()->exists('loginAdmin')){
            $nome = $request->nome;
            $senha = $request->senha;
            if($nome and $senha){
                $admin = Admin::create($request->all());
                $mensagem = $request->session()->flash('mensagem', 'Administrador cadastrado com sucesso');
                return redirect('/createAdmin');
            }
            else{
                $mensagem = $request->session()->flash('mensagem', 'Os dados não podem estar em branco!');
                return redirect('/createAdmin');
            }
        }
        else{
            redirect('/loginAdmin');
        }
    }

    public function updateGet(Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $mensagem = $request->session()->get('mensagem');
            $nome_ant = $request->session()->get('nome');
            return view("admin.update", compact(['mensagem','id_admin','nome_ant']));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function updatePost(Request $request){
        $admin = Admin::where('id_admin',$request->session()->get('id_admin'))
            ->where('nome', $request->nome)->where('senha', $request->senha)->first();
        if($admin){
            $teste = Admin::where('nome', $request->nome_novo)->where('senha', $request->senha_nova)->first();
            if(!$teste){
                $affected = DB::table('admin')->where('id_admin',$admin->id_admin)
                    ->update(['nome'=>$request->nome_novo,'senha'=>$request->senha_nova]);
                    $request->session()->put('mensagem','dados alterados, teste seu login!');
                    $request->session()->put('nome',$request->nome_novo);
                    return redirect('/updateAdmin');
            }
            else{
                $request->session()->put('mensagem','escolha um novo nome ou outra senha');
                return redirect('/updateAdmin');
            }
        }
        else{
            $request->session()->put('mensagem','corrija seus dados de login e senha antigos');
            return redirect('/updateAdmin');
        }
    }

    public function deleteGet(Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $mensagem = $request->session()->get('mensagem');
            $nome = $request->session()->get('nome');
            return view("admin.delete", compact(['mensagem','nome']));
        } else {
            return redirect('/loginAdmin');
        }
    }


    public function deletepost(Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $admin = Admin::where('id_admin',$request->session()->get('id_admin'))
            ->where('nome', $request->nome)->where('senha', $request->senha)->first();

            if($admin){
                DB::table('admin')->where('id_admin', $request->session()->get('id_admin'))->delete();
                $request->session()->flush();
                return redirect('/loginAdmin');
            }
            else{
                $request->session()->put('mensagem','corrija seus dados de login e senha');
                return redirect('/deleteAdmin');
            }
        }
        else {
            return redirect('/loginAdmin');
            }
    }

}
