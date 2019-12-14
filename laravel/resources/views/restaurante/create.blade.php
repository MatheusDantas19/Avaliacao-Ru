@extends('admin.padrao')
@section('cabecalho')
    Cadastro de Restaurante
@endsection
@section('conteudo')
{{$mensagem}}
<div class="row">
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="campus" name="campus" type="text" class="validate"
                       placeholder="teste">
                <label for="nome">Campus:</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="setor" name="setor" type="text" class="validate"
                       placeholder="teste">
                <label for="nome">Setor:</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="local" name="local" type="text" class="validate"
                       placeholder="teste">
                <label for="nome">Local:</label>
            </div>
        </div>


            <button class="btn waves-effect waves-light" type="submit">Cadastrar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
@endsection
