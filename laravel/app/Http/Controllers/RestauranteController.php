<?php

namespace App\Http\Controllers;

use App\Restaurante;
use App\Admin_gerencia_restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestauranteController extends Controller
{

    public function createGet (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $mensagem = $request->session()->get('mensagem');
            return view("restaurante.create", compact("mensagem"));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function createPost (Request $request){
        if ($request->session()->exists('loginAdmin')){
            $campus = $request->campus;
            $setor = $request->setor;
            $local = $request->local;
            if($campus and $setor and $local){
                $teste = Restaurante::where('campus', $campus)->where('setor', $setor)->where('local',$local)->first();
                if($teste){
                    $mensagem = $request->session()->flash('mensagem', 'Restaurante já existente');
                    return redirect('/createRU');
                }
                else{
                    $ru = Restaurante::create($request->all());
                    $mensagem = $request->session()->flash('mensagem', 'Restaurante cadastrado com sucesso');
                    return redirect('/createRU');
                }
            }
            else{
                $mensagem = $request->session()->flash('mensagem', 'Os dados não podem estar em branco!');
                return redirect('/createRU');
            }
        }
        else{
            redirect('/loginAdmin');
        }
    }

    public function updateAdminGet (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $Rus = DB::table('admin_gerencia_restaurante')
                        ->rightjoin('restaurante','admin_gerencia_restaurante.id_restaurante','=','restaurante.id_restaurante')
                        ->whereNull('id_admin')
                        ->get();
            $mensagem = $request->session()->get('mensagem');
            return view("restaurante.updateAdmin", compact(["Rus","mensagem"]));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function updateAdminPost (Request $request){
        if ($request->session()->exists('loginAdmin')){
            $id_restaurante = $request->id_restaurante;
            $campus = $request->campus;
            $setor = $request->setor;
            $local = $request->local;
            if($id_restaurante and $campus and $setor and $local){
                $teste = Restaurante::where('id_restaurante', $id_restaurante)
                    ->where('campus', $campus)->where('setor', $setor)
                    ->where('local',$local)->first();
                if($teste){
                    DB::table('admin_gerencia_restaurante')->insert(
                        ['id_admin'=>$request->session()->get('id_admin'),
                        'id_restaurante'=>$id_restaurante]
                    );
                    $mensagem = $request->session()->flash('mensagem', 'Administração concedida');
                    return redirect('/updateAdminRU');
                }
                else{
                    $mensagem = $request->session()->flash('mensagem', 'Dados informados incorretos');
                    return redirect('/updateAdminRU');
                }
            }
            else{
                $mensagem = $request->session()->flash('mensagem', 'Os dados não podem estar em branco!');
                return redirect('/updateAdminRU');
            }
        }
        else{
            redirect('/loginAdmin');
        }
    }

    public function updateGet (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $Rus = DB::table('admin_gerencia_restaurante')
                        ->join('restaurante','admin_gerencia_restaurante.id_restaurante','=','restaurante.id_restaurante')
                        ->get();
            $mensagem = $request->session()->get('mensagem');
            return view("restaurante.update", compact(["Rus","mensagem"]));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function updatePost (Request $request){
        if ($request->session()->exists('loginAdmin')){
            $id_restaurante = $request->id_restaurante;
            $campus = $request->campus;
            $setor = $request->setor;
            $local = $request->local;
            if($id_restaurante and $campus and $setor and $local){
                $teste = Admin_gerencia_restaurante::where('id_admin', $request->session()->get('id_admin'))
                    ->where('id_restaurante', $id_restaurante)->first();
                if($teste){
                    $teste2 = Restaurante::where('campus', $campus)->where('setor', $setor)->where('local',$local)->first();
                    if($teste2){
                        $mensagem = $request->session()->flash('mensagem', 'RU com essas informações já existe, confira seus dados');
                        return redirect('/updateRU');
                    } else{
                        $affected = DB::table('restaurante')
                                        ->where('id_restaurante',$id_restaurante)
                                        ->update(['campus'=>$campus,
                                                    'setor'=>$setor,
                                                    'local'=>$local]);
                        $mensagem = $request->session()->flash('mensagem', 'RU alterado com sucesso');
                        return redirect('/updateRU');
                    }

                }
                else{
                    $mensagem = $request->session()->flash('mensagem', 'Você não administra o RU com esse id_restaurante');
                    return redirect('/updateRU');
                }
            }
            else{
                $mensagem = $request->session()->flash('mensagem', 'Os dados não podem estar em branco!');
                return redirect('/updateRU');
            }
        }
        else{
            redirect('/loginAdmin');
        }
    }

    public function deleteAdminGet (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $Rus = DB::table('admin_gerencia_restaurante')
                        ->join('restaurante','admin_gerencia_restaurante.id_restaurante','=','restaurante.id_restaurante')
                        ->get();
            $mensagem = $request->session()->get('mensagem');
            return view("restaurante.deleteAdmin", compact(["Rus","mensagem"]));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function deleteAdminPost (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $id_restaurante = $request->id_restaurante;
            $id_admin = $request->session()->get('id_admin');
            DB::table('admin_gerencia_restaurante')
                ->where('id_admin',$id_admin)
                ->where('id_restaurante',$id_restaurante)
                ->delete();

            $mensagem = $request->session()->flash('mensagem','Você não administra mais aquele RU');
            return redirect('/deleteAdminRU');
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function deleteGet (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $Rus = DB::table('admin_gerencia_restaurante')
                        ->join('restaurante','admin_gerencia_restaurante.id_restaurante','=','restaurante.id_restaurante')
                        ->get();
            $mensagem = $request->session()->get('mensagem');
            return view("restaurante.delete", compact(["Rus","mensagem"]));
        } else {
            return redirect('/loginAdmin');
        }
    }

    public function deletePost   (Request $request){
        if ($request->session()->exists('loginAdmin')) {
            $id_restaurante = $request->id_restaurante;
            $id_admin = $request->session()->get('id_admin');
            $teste = DB::table('admin_gerencia_restaurante')
                        ->where('id_admin',$id_admin)
                        ->where('id_restaurante',$id_restaurante)->first();
            if($teste){
                DB::table('restaurante')
                    ->where('id_restaurante',$id_restaurante)
                    ->delete();
                $mensagem = $request->session()->flash('mensagem', 'RU excluído com sucesso');
                return redirect("/deleteRU");
            } else{
                $mensagem = $request->session()->flash('mensagem', 'você não administra esse RU para poder excluí-lo');
                return redirect("/deleteRU");
            }

        } else {
            return redirect('/loginAdmin');
        }
    }

}
