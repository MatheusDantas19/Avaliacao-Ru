<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginAdminGet(){
        return view('admin.login');
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
            return view("admin.cadastro");
        } else {
            return redirect('/loginAdmin');
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
