<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    { //rota '/'
        $mensagem = $request->session()->get("mensagem");
        return view('main.index',compact("mensagem"));
    }

}
