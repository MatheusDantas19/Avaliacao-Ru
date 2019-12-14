@extends('on')

@section('cabecalho')
    Dados
@endsection

@section('conteudo')
{{$mensagem}}
<style>
    .deletar {
        color: red;   
        font-size: 18px;
    }

    a:hover {
        color: black;
    }
</style>
<div class="row">
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="nome" name="nome" type="text" class="validate" value="{{$aluno->nome}}">
                <label for="nome">Nome Completo:</label>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="matricula" name="matricula" type="text" class="validate" value="{{$aluno->matricula}}">
                    <label for="matricula">Matricula:</label>
                </div>
            </div>

            <div class="input-field col s6">
                <input id="curso" name="curso" type="text" class="validate"
                       placeholder="Engenharia de Software" value="{{$aluno->curso}}">
                <label for="curso">Curso:</label>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="senha" name="senha" type="password" class="validate"
                           placeholder="****" value="{{$aluno->senha}}">
                    <label for="senha">Senha:</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit">Salvar Alterações
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
    <a class="deletar modal-trigger" href="#modal1">Deseja deletar sua conta?</a>
</div>


<div id="modal1" class="modal">
    <div class="modal-content">
        <form method="GET" action="/deletar">
            <h5>Digite sua senha:</h5>
            <div class="input-field col s6">
                <input type="text" class="validate" name="senha">
            </div>
            <div class="modal-footer">
                <a href="#" class="modal-close waves-effect waves-green btn">Sair</a>
                <button class="btn waves-effect waves-light" type="submit">Excluir</button>
            </div>
        </form>
    </div>
</div>
    
@endsection