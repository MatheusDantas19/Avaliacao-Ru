@extends('admin.padrao')
@section('cabecalho')
    Atualização de Conta
@endsection
@section('conteudo')
{{$mensagem}}
<div class="row">
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="nome" name="nome" type="text" class="validate" value={{$nome_ant}}>
                <label for="nome">Nome Antigo:</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input id="nome_novo" name="nome_novo" type="text" class="validate" value={{$nome_ant}}>
                <label for="nome">Nome Novo:</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input id="senha" name="senha" type="password" class="validate">
                <label for="senha">Senha Antiga:</label>
            </div>
        </div>

        <div class="row">
                <div class="input-field col s6">
                    <input id="senha_nova" name="senha_nova" type="password" class="validate">
                    <label for="senha">Senha Nova:</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit">Atualizar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
@endsection
