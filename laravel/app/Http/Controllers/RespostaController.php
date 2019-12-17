<?php

namespace App\Http\Controllers;

use App\Admin;
use DateTime;
use App\Resposta;
use App\Reclamacao_Denuncia_Res;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RespostaController extends Controller
{
    public function createGet(Request $request)
    {
        if ($request->session()->exists('loginAdmin')) {
            $mensagem = $request->session()->get('mensagem');
            $id_admin = $request->session()->get('id_admin');
            $reclamacoes = DB::select(
                'SELECT reclamacao.id_reclamacao, reclamacao.categoria, reclamacao.descricao, reclamacao.data_ocorrencia,
            aluno_abre_reclamacao.data,
            reclamacao_denuncia_res.id_restaurante,
            restaurante.campus, restaurante.setor, restaurante.local,
            prato.id_prato, prato.descricao as elaboracao

            FROM reclamacao
                JOIN aluno_abre_reclamacao on aluno_abre_reclamacao.id_reclamacao = reclamacao.id_reclamacao
                JOIN reclamacao_denuncia_res on reclamacao_denuncia_res.id_reclamacao = reclamacao.id_reclamacao
                JOIN admin_gerencia_restaurante on admin_gerencia_restaurante.id_restaurante = reclamacao_denuncia_res.id_restaurante
                JOIN restaurante on restaurante.id_restaurante = reclamacao_denuncia_res.id_restaurante
                LEFT JOIN reclamacao_cita_prato on reclamacao_cita_prato.id_reclamacao = reclamacao.id_reclamacao
                LEFT JOIN prato on prato.id_prato = reclamacao_cita_prato.id_prato
            WHERE reclamacao.id_reclamacao in (
                    SELECT reclamacao.id_reclamacao
				    FROM reclamacao
					    LEFT JOIN resposta_responde_reclamacao on reclamacao.id_reclamacao = resposta_responde_reclamacao.id_reclamacao
					    LEFT JOIN resposta on resposta_responde_reclamacao.id_resposta = resposta.id_resposta
				    WHERE resposta_responde_reclamacao.id_resposta IS NULL)
                AND admin_gerencia_restaurante.id_admin = ' . $id_admin . ';',
                [1]
            );



            return view("resposta.create", compact(['reclamacoes', 'mensagem']));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function createPost(Request $request)
    {
        if ($request->session()->exists('loginAdmin')) {
            $id_admin = $request->session()->get('id_admin');
            $id_reclamacao = $request->id_reclamacao;
            $resposta = $request->resposta;
            $teste = DB::table('resposta_responde_reclamacao')
                ->where('resposta_responde_reclamacao.id_reclamacao', '=', $id_reclamacao)->get();
            if (count($teste) > 0) {
                $mensagem = $request->session()->flash('mensagem', $teste);
                return redirect("/createResposta");
            } else {
                DB::beginTransaction();
                $teste2 = DB::select(
                    'SELECT *
                    FROM reclamacao
                        JOIN reclamacao_denuncia_res on reclamacao.id_reclamacao = reclamacao_denuncia_res.id_reclamacao
                        JOIN admin_gerencia_restaurante on admin_gerencia_restaurante.id_restaurante = reclamacao_denuncia_res.id_restaurante
                        LEFT JOIN resposta_responde_reclamacao on reclamacao.id_reclamacao = resposta_responde_reclamacao.id_reclamacao
                        LEFT JOIN resposta on resposta_responde_reclamacao.id_resposta = resposta.id_resposta
                    WHERE admin_gerencia_restaurante.id_admin = ' . $id_admin . ' and resposta_responde_reclamacao.id_resposta IS NULL
                            and reclamacao.id_reclamacao = ' . $id_reclamacao . '',
                    [1]
                );
                if (count($teste2) > 0) {
                    $resposta_id = DB::table('resposta')->insertGetId(['status' => 1, 'descricao' => $resposta]);

                    $admin = DB::table('admin_elabora_resposta')
                        ->insert(['id_admin' => $id_admin, 'id_resposta' => $resposta_id, 'data' => new DateTime()]);

                    $resposta = DB::table('resposta_responde_reclamacao')
                        ->insert(['id_reclamacao' => $id_reclamacao, 'id_resposta' => $resposta_id]);

                    if ($resposta && $admin) {
                        DB::commit();
                    } else {
                        DB::rollBack();
                    }

                    $mensagem = $request->session()->flash('mensagem', count($teste2));
                    return redirect("/createResposta");
                } else {
                    $mensagem = $request->session()->flash('mensagem', 'Você não tem permissao para responder essa reclamação, verifique seus dados');
                    return redirect("/createResposta");
                }
            }
        } else {
            return redirect('/loginAdmin');
        }
    }
}
