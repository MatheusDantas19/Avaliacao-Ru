<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Reclamacao;
use App\Reclamacao_Denuncia_Res;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReclamacaoController extends Controller
{
    public function reclamacaoGet(Request $request)
    {
        if ($request->session()->exists('login')) {

            $pratos = null;
            if ($request->session()->exists('prato')) {
                $pratos = DB::table("prato")->get();
            }

            $opcao = $request->session()->get("prato");
            $restaurante = DB::table("restaurante")->get();

            $mensagem = $request->session()->get("mensagem");

            return view('reclamacao.reclamacao', [
                'restaurante' => $restaurante,
                'pratos' => $pratos
            ], compact('opcao','mensagem'));
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

                    $request->session()->flash('mensagem', 'Reclamação enviada com sucesso');
                } else {
                    $request->session()->flash('prato', $request->input('restaurante'));
                    return redirect('/reclamacao');
                }
                return redirect('/reclamacao');
            } else {
                $request->session()->flash('mensagem', 'Selecione primeiro o restaurante');
                return redirect("/reclamacao");
            }
        } else {
            return redirect("/");
        }
    }
}
