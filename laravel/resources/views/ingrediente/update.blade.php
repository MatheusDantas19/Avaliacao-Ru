@extends('admin.padrao')
@section('cabecalho')
    Atualizar Ingrediente
@endsection
@section('conteudo')
<table>
    <thead>
        <caption>Lista de Ingredientes:</caption>
        <tr>
            <th>id_ingrediente</th>
            <th>nome</th>
            <th>descrição</th>
        </tr>
    </thead>
    <tbody>
        @php
            foreach ($ings as $i => $value) {
                echo '<tr>';
                echo'<td>'.$value->id_ingrediente.'</td>';
                echo'<td>'.$value->nome.'</td>';
                echo'<td>'.$value->descricao.'</td>';
                echo'</tr>';
            }
        @endphp
    </tbody>
</table>
<br>Insira nos campos abaixo os dados do Ingrediente que você irá atualizar:
<br>{{$mensagem}}
<div class="row">
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
                <div class="input-field col s6">
                    <input id="id_ingrediente" name="id_ingrediente" type="text" class="validate"
                    placeholder="0">
                    <label for="id_ingrediente">id_ingrediente:</label>
                </div>
            </div>
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
                       placeholder="Arroz Branco Comum">
                <label for="descricao">Descrição:</label>
            </div>
        </div>
            <button class="btn waves-effect waves-light" type="submit">Atualizar dados
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
@endsection
