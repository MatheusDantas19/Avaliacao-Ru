<?php
namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class MainController extends Controller{
    public function index(Request $request) {
        $mensagem = $request->session()->get('mensagem');

        return view('main.index',compact('mensagem'));
    }

    public function signup(Request $request) {
        return view('main.signup', []);
    }

    public function login (Request $request){
        return view('main.login');
    }

    public function loginAluno (Request $request){
        $aluno = Aluno::where('matricula', $request->matricula)->first();
        if($aluno)
            var_dump($aluno->nome);
    }
    
    public function store(Request $request){
        $aluno = Aluno::create($request->all());
        
        $request->session()->flash('mensagem','Aluno cadastrado com sucesso');

        return redirect('/');
    }
}

?>
