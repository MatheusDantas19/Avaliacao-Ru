@extends('admin.padrao')
@section('cabecalho')
Apagar Prato
@endsection
@section('conteudo')
<div class="row">
    <form method="POST">
        @csrf
        <div class="row col s6">
            <label style="font-size: 15px;">Restaurante</label>
            <select name="classificacao" class="browser-default">
                <option value="" disabled selected>Escolha Restaurate</option>
                @foreach($restaurante as $res)
                <option value="{{$res->id_restaurante}}">{{$res->campus}} - {{$res->setor}} - {{$res->local}}</option>
                @endforeach
            </select>
        </div>

        <table>
            <thead>
                <caption>Lista de Pratos:</caption>
                <tr>
                    <th>id_prato</th>
                    <th>nome</th>
                    <th>descrição</th>
                    <th>classificação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prato as $prat)
                <th>{{$prat->id_prato}}</th>
                <th>{{$prat->nome}}</th>
                <th>{{$prat->descricao}}</th>
                <th>{{$prat->classificacao}}</th>
                @endforeach
            </tbody>
        </table>
        <br>Insira no campo abaixo o ID_Prato que você Deseja apagar:
        <br>{{$mensagem}}
        <div class="row">
            <form class="col s12" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s6">
                        <input id="id_prato" name="id_prato" type="text" class="validate" placeholder="0">
                        <label for="id_prato">id_prato:</label>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit">Apagar Prato
                    <i class="material-icons right">send</i>
                </button>
        </div>
    </form>
</div>
@endsection