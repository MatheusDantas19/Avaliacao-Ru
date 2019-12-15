@extends ("admin.padrao")
@section('cabecalho')
Cadastrar Prato
@endsection
@section ("conteudo")
<div class="row">
    {{$mensagem}}
    <form method="POST">
        @csrf
        <div class="row">
            <div class="col s6">
                <label style="font-size: 15px;">Restaurante</label>
                <select name="restaurante" class="browser-default">
                    <option value="" disabled selected>Escolha Restaurate</option>
                    @foreach($restaurante as $res)
                    <option value="{{$res->id_restaurante}}">{{$res->campus}} - {{$res->setor}} - {{$res->local}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <textarea name="nome" id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Nome Prato</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <textarea name="descricao" id="textarea1" class="materialize-textarea"></textarea>
                <label for="font-size: 15px;">Descrição</label>
            </div>
        </div>

        <div class="row">
            <div class="col s6">
                <label style="font-size: 15px;">classificação</label>
                <select name="classificacao" class="browser-default">
                    <option value="" disabled selected>Escolha Classificação</option>
                    <option value="Vegetariano">Vegetariano</option>
                    <option value="Normal">Normal</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select multiple name="ingrediente[]">
                    <option value="" disabled selected>Selecione Ingredientes do Prato</option>
                    @foreach($ingrediente as $ingred)
                    <option value="{{$ingred->id_ingrediente}}">{{$ingred->nome}}</option>
                    @endforeach
                </select>
                <label style="font-size: 15px;">Ingredientes</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select name='turno'>
                    <option value="" disabled selected>Turno</option>
                    <option value="Mat">Matutino</option>
                    <option value="Ves">Vespertino</option>
                    <option value="Not">Noturno</option>
                </select>
                <label>Escolha Turno</label>
            </div>
        </div>
        <div clas="row">
            <div class="col 6">
                <label>Dia Da Semana</label>
                <select name='dia_semana'>
                    <option value="" disabled selected>Escolha Dia</option>
                    <option value="seg">Segunda-Feira</option>
                    <option value="ter">Terça-Feira</option>
                    <option value="qua">Quarta-Feira</option>
                    <option value="qui">Quinta-Feira</option>
                    <option value="sex">Sexta-Feira</option>
                    <option value="sab">Sabado</option>
                </select>
            </div>
        </div>
        <button style="margin-top: 25px" class="btn waves-effect waves-light" type="submit">Cadastrar
            <i class="material-icons right">send</i>
        </button>

    </form>
</div>
@endsection