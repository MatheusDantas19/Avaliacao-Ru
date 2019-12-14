@extends('admin.padrao')
@section('cabecalho')
    Cadastro de Ingrediente
@endsection
@section('conteudo')
{{$mensagem}}
<div class="row">
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="nome" name="nome" type="text" class="validate"
                       placeholder="Arroz">
                <label for="nome">Nome:</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="descricao" name="descricao" type="text" class="validate"
                       placeholder="Arroz branco comum">
                <label for="descricao">Descrição:</label>
            </div>
        </div>

            <button class="btn waves-effect waves-light" type="submit">Cadastrar Ingrediente
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
@endsection
