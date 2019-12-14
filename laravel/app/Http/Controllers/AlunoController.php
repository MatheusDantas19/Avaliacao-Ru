<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Reclamacao;
use App\Reclamacao_Denuncia_Res;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            return view('aluno.signup', compact("mensagem"));
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
            } else {
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
            $request->session()->flush('login');
            return redirect('/');
        }
        return redirect('/');
    }

    public function alterarGet(Request $request)
    { // /alterar metodo get
        if ($request->session()->exists('login')) {
            $matricula = $request->session()->get("login");
            $aluno = Aluno::where('matricula', $matricula)->first();

            $mensagem = $request->session()->get("mensagem");
            return view("aluno.alterar", compact("aluno", "mensagem"));
        } else {
            return redirect("/");
        }
    }

    public function alterarPost(Request $request)
    { // /alterar metodo post
        if ($request->session()->exists('login')) {
            $matricula = $request->session()->get("login");

            $aluno = Aluno::where('matricula', $matricula)->update(
                [
                    'nome' => $request->nome,
                    'matricula' => $request->matricula,
                    'curso' => $request->curso,
                    'senha' => $request->senha
                ]
            );

            $request->session()->put('login', $request->matricula);
            $mensagem = $request->session()->flash('mensagem', 'Dados atualizado com sucesso');
            return redirect("/alterar");
        } else {
            return redirect("/");
        }
    }

    public function deletar(Request $request)
    {
        if ($request->session()->exists('login')) {

            $matricula = $request->session()->get("login");
            $senha = $request->senha;

            $aluno = Aluno::where('matricula', $matricula)
                ->where('senha', $senha)->first();

            if ($aluno) {
                Aluno::where('matricula', $matricula)->where('senha', $senha)->delete();
                $request->session()->forget('login');

                $request->session()->flash('mensagem', 'Usuário excluido com sucesso');

                return redirect("/");
            } else {
                $request->session()->flash('mensagem', 'Senha informada está incorreta');
                return redirect("/alterar");
            }
        }
        return redirect("/");
    }

    public function reclamacaoGet(Request $request)
    {
        if ($request->session()->exists('login')) {

            $pratos = null;
            if($request->session()->exists('prato')){
                $pratos = DB::table("prato")->get();
            }

            $opcao = $request->session()->get("prato");
            $restaurante = DB::table("restaurante")->get();
            $mensagem = $request->session()->get("mensagem");

            return view('aluno.reclamacao', ['restaurante' => $restaurante,
             'pratos' => $pratos],compact('opcao'),compact('mensagem'));
        } else {
            return redirect("/");
        }
    }

    public function reclamacaoPost(Request $request)
    {
        if ($request->session()->exists('login')) {
            if ($request->has('restaurante')) {
                if ($request->has('submit')) {
                    $reclamacao = Reclamacao::create([
                        'data_ocorrencia' => $request->data,
                        'categoria' => $request->categoria,
                        'descricao' => $request->descricao
                    ]);

                    $reclamacao_denuncia_res = DB::table('reclamacao_denuncia_res')->insert([
                        [
                            'id_reclamacao' => $reclamacao->id,
                            'id_restaurante' => $request->restaurante
                        ]
                    ]);

                    $reclamacao_cita_pra = DB::table('reclamacao_cita_prato')->insert([
                        [
                            'id_reclamacao' => $reclamacao->id,
                            'id_prato' => $request->prato
                        ]
                    ]);
                } else { 
                    $request->session()->flash('prato', $request->input('restaurante'));
                    $request->session()->flash('mensagem',"Reclamação enviada com sucesso" );
                    return redirect('/reclamacao');
                }
                return redirect('/reclamacao');
            } else {
                return redirect("/reclamacao");
            }
        } else {
            return redirect("/");
        }
    }
}
