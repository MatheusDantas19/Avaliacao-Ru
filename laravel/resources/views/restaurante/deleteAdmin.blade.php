@extends('admin.padrao')
@section('cabecalho')
    Deixar Administração de RU
@endsection
@section('conteudo')
<table>
    <thead>
        <caption>Restaurantes que você administra:</caption>
        <tr>
            <th>id_restaurante</th>
            <th>campus</th>
            <th>setor</th>
            <th>local</th>
        </tr>
    </thead>
    <tbody>
        @php
            foreach ($Rus as $i => $value) {
                echo '<tr>';
                echo'<td>'.$value->id_restaurante.'</td>';
                echo'<td>'.$value->campus.'</td>';
                echo'<td>'.$value->setor.'</td>';
                echo'<td>'.$value->local.'</td>';
                echo'</tr>';
            }
        @endphp
    </tbody>
</table>
<br>Insira no campo abaixo o ID do RU que você vai deixar de administrar:
<br>{{$mensagem}}
<div class="row">
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
                <div class="input-field col s6">
                    <input id="id_restaurante" name="id_restaurante" type="text" class="validate"
                    placeholder="0">
                    <label for="nome">id_restaurante:</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit">Deixar administração
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
@endsection
