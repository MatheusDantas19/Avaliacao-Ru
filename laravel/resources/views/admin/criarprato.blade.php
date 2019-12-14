@extends ("admin.padrao")
@section ("conteudo")
<div class="row">
    <form method="POST"> 
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <textarea name="nome" id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Nome Prato</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea name="descricao" id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Descrição</label>
            </div>
        </div>

        <div class="row col s6">
            <label style="font-size: 15px;">classificação</label>
            <select name="classificacao" class="browser-default">
                <option value="" disabled selected>Escolha Classificação</option>
                <option value="Vegetariano">Vegetariano</option>
                <option value="Normal">Normal</option>
            </select>
        </div>
        <button style="margin-top: 25px" class="btn waves-effect waves-light" type="submit">Cadastrar
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>
@endsection