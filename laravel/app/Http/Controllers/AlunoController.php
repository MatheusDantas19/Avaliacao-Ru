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
            $request->session()->put('login', $request->matricula);
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

    public function alterarGet(Request $request){ // /alterar metodo get
        if($request->session()->exists('login')){
            $matricula = $request->session()->get("login");
            $aluno = Aluno::where('matricula', $matricula)->first();

            $mensagem = $request->session()->get("mensagem");
            return view ("aluno.alterar",compact("aluno","mensagem"));
        }else{
            return redirect("/");
        }
    }

    public function alterarPost(Request $request){ // /alterar metodo post
        if($request->session()->exists('login')){
            $matricula = $request->session()->get("login");
            $aluno = Aluno::where('matricula', $matricula)->update(
                ['matricula' => $request->matricula],
                ['nome' => $request->nome],
                ['curso' => $request->curso],
                ['senha' => $request->senha]
            );
            $request->session()->put('login', $request->matricula);
            $mensagem = $request->session()->flash('mensagem', 'Dados atualizado com sucesso');
            return redirect("/alterar");
        }else{
            return redirect("/");
        }
    }

    public function deletar(Request $request){
        if ($request->session()->exists('login')) {

            $matricula = $request->session()->get("login");
            $senha = $request->senha;

            $aluno = Aluno::where('matricula',$matricula)
            ->where('senha', $senha)->first();

            if($aluno){
                Aluno::where('matricula',$matricula)->where('senha', $senha)->delete();
                $request->session()->forget('login');

                $request->session()->flash('mensagem', 'Usuário excluido com sucesso');
                
                return redirect("/");
            }else{
                $request->session()->flash('mensagem', 'Senha informada está incorreta');
                return redirect ("/alterar");
            }
        }
        return redirect("/");
    }
}
