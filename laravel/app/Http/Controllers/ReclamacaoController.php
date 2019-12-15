<?php

namespace App\Http\Controllers;

use App\Aluno;
use DateTime;
use App\Reclamacao;
use App\Reclamacao_Denuncia_Res;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReclamacaoController extends Controller
{
    public function criaReclamacaoGet(Request $request)
    {
        if ($request->session()->exists('login')) {

            $pratos = null;
            if ($request->session()->exists('prato')) {
                $pratos = DB::table("prato")->get();
            }

            $opcao = $request->session()->get("prato");
            $restaurante = DB::table("restaurante")->get();

            $mensagem = $request->session()->get("mensagem");

            return view('reclamacao.criareclamacao', [
                'restaurante' => $restaurante,
                'pratos' => $pratos
            ], compact('opcao','mensagem'));
        } else {
            return redirect("/");
        }
    }

    public function criaReclamacaoPost(Request $request)
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

                    $aluno_abre_reclamcaco = DB::table('aluno_abre_reclamacao')->insert([
                        [
                            'matricula' => $request->session()->get('login'),
                            'id_reclamacao' => $reclamacao->id,
                            'data' => new DateTime()
                        ]
    
                    ]);

                    $request->session()->flash('mensagem', 'Reclamação enviada com sucesso');
                } else {
                    $request->session()->flash('prato', $request->input('restaurante'));
                    return redirect('/criaReclamacao');
                }
                return redirect('/criaReclamacao');
            } else {
                $request->session()->flash('mensagem', 'Selecione primeiro o restaurante');
                return redirect("/criaReclamacao");
            }
        } else {
            return redirect("/");
        }
    }

    public function verReclamacaoGet(Request $request){
        $matricula = $request->session()->get('login');
        if ($request->session()->exists('login')) {
            $consulta = DB::table('aluno_abre_reclamacao')
            ->join('reclamacao','aluno_abre_reclamacao.id_reclamacao','=','reclamacao.id_reclamacao')
            ->join('reclamacao_denuncia_res','reclamacao.id_reclamacao','=','reclamacao_denuncia_res.id_reclamacao')
            ->join('restaurante','reclamacao_denuncia_res.id_restaurante','=','restaurante.id_restaurante')
            ->join('reclamacao_cita_prato','reclamacao.id_reclamacao','=','reclamacao_cita_prato.id_reclamacao')
            ->join('prato','reclamacao_cita_prato.id_prato','=','prato.id_prato')
            ->where('aluno_abre_reclamacao.matricula','=',$matricula)->get();

            $descricao = DB::table('aluno_abre_reclamacao')
            ->join('reclamacao','aluno_abre_reclamacao.id_reclamacao','=','reclamacao.id_reclamacao')
            ->join('reclamacao_denuncia_res','reclamacao.id_reclamacao','=','reclamacao_denuncia_res.id_reclamacao')
            ->join('restaurante','reclamacao_denuncia_res.id_restaurante','=','restaurante.id_restaurante')
            ->select("descricao")
            ->where('aluno_abre_reclamacao.matricula','=',$matricula)->get();

            $vet = array();
            foreach($descricao as $d){
                $vet[] = $d->descricao;
            }

            return view('reclamacao.ver',compact('consulta'),compact('vet'));
        }else{
            return redirect('/');
        }
    }
}
