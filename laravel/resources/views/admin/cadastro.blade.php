@extends('admin.main')
@section('cabecalho')
    Cadastro de Administrador
@endsection
@section('conteudo')
<div class="row">
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="nome" name="nome" type="text" class="validate"
                       placeholder="teste">
                <label for="nome">Nome:</label>
            </div>
        </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="senha" name="senha" type="password" class="validate"
                           placeholder="****">
                    <label for="senha">Senha:</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit">Logar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
@endsection
