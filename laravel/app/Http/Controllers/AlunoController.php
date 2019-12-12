<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function loginAlunoGet(Request $request)
    { //rota '/login' GET
        if ($request->session()->exists('login')) {
            return redirect('/dashboard');
        } else {
            $mensagem = $request->session()->get('mensagem');
            return view('aluno.login', compact('mensagem'));
        }
    }

    public function loginAlunoPost(Request $request) //rota '/login' POST
    {
        $aluno = Aluno::where('matricula', $request->matricula)
            ->where('senha', $request->senha)->first();

        if ($aluno) {
            $request->session()->put('login', '$request->matricula');
            return redirect('/dashboard');
        } else {
            $mensagem = $request->session()->flash('mensagem', 'Dados de login incorretos!');

            return redirect('/login');
        }
    }

    public function signupGet(Request $request)
    { //rota '/signup' GET
        if ($request->session()->exists('login')) {
            return redirect('/dashboard');
        } else {
            $mensagem = $request->session()->get("mensagem");
            return view('aluno.signup',compact("mensagem"));
        }
    }

    public function signupPost(Request $request) //rota '/signup' POST
    {
        if ($request->session()->exists('login')) {
            return redirect('/dashboard');
        } else {
            $nome = $request->nome;
            $matricula = $request->matricula;
            $curso = $request->curso;
            $senha = $request->senha;
            if ($nome and $matricula and $curso and $senha) {
                $aluno = Aluno::create($request->all());
                $request->session()->flash('mensagem', 'Aluno cadastrado com sucesso');
                return redirect('/');
            }else{
                $request->session()->flash('mensagem', 'Os dados não podem está em branco!');
                return redirect('/signup');
            }

        }
    }

    public function dashboard(Request $request) //rota '/dashboard'
    {
        if ($request->session()->exists('login')) {
            return view("aluno.dashboard");
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        if ($request->session()->exists('login')) {
            $request->session()->forget('login');
            return redirect('/');
        }
        return redirect('/');
    }

}
