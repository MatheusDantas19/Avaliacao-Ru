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
            <select name='restaurante' class="browser-default">
                <option value="" disabled selected>Escolha o restaurante:</option>
                @foreach ($restaurante as $res)
                @if($op ?? '' == $res->id_restaurante)
                <option selected value="{{$res->id_restaurante}}">
                    Campus:{{$res->campus}} Local:{{$res->local}} Setor:{{$res->setor}}
                </option>
                @else
                <option value="{{$res->id_restaurante}}">
                    Campus:{{$res->campus}} Local:{{$res->local}} Setor:{{$res->setor}}
                </option>
                @endif
                @endforeach
            </select>
            <button style="margin-top: 25px" class="btn waves-effect waves-light" type="submit">Pesquisar os pratos
                <i class="material-icons right">search</i>
            </button>
        </div>

        <table>
            <thead>
                <caption>
                    <h5>Lista de Pratos:</h5>
                </caption>
                <tr>
                    <th>id_prato</th>
                    <th>nome</th>
                    <th>descrição</th>
                    <th>classificação</th>
                </tr>
            </thead>
            <tbody>
                @isset($prato)
                @foreach($prato as $prat)
                <tr>
                    <th>{{$prat->id_prato}}</th>
                    <th>{{$prat->nome}}</th>
                    <th>{{$prat->descricao}}</th>
                    <th>{{$prat->classificacao}}</th>
                </tr>
                @endforeach
                @endisset
            </tbody>
        </table>

        <div class="row">
            <br>Insira no campo abaixo o ID_Prato que você Deseja apagar:
            <br>{{$mensagem}}

            <div class="input-field col s6">
                <input id="id_prato" name="id_prato" type="text" class="validate" placeholder="0">
                <label for="id_prato">id_prato:</label>
            </div>
        </div>

        <button name="submit" class="btn waves-effect waves-light" type="submit">Apagar Prato
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>
@endsection