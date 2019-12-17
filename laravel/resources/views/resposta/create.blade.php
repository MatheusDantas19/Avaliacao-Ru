@extends('admin.padrao')
@section('cabecalho')
    Responder Reclamação
@endsection
@section('conteudo')
<table>
    <thead>
        <caption>Reclamações de seus Restaurantes:</caption>
        <tr>
            <th>id_reclamação</th>
            <th>categoria</th>
            <th>id_restaurante</th>
            <th>campus</th>
            <th>setor</th>
            <th>local</th>
            <th>dia ocorrência</th>
            <th>dia postagem</th>
            <th>descricao da ocorrencia</th>
            <th>id_prato</th>
            <th>descricao do prato</th>

        </tr>
    </thead>
    <tbody>
        @php
            foreach ($reclamacoes as $i => $value) {
                echo '<tr>';
                echo'<td>'.$value->id_reclamacao.'</td>';
                echo'<td>'.$value->categoria.'</td>';
                echo'<td>'.$value->id_restaurante.'</td>';
                echo'<td>'.$value->campus.'</td>';
                echo'<td>'.$value->setor.'</td>';
                echo'<td>'.$value->local.'</td>';
                echo'<td>'.$value->data_ocorrencia.'</td>';
                echo'<td>'.$value->data.'</td>';
                echo'<td>'.$value->descricao.'</td>';
                echo'<td>'.$value->id_prato.'</td>';
                echo'<td>'.$value->elaboracao.'</td>';
                echo'</tr>';
            }
        @endphp
    </tbody>
</table>
{{$mensagem}}
<div class="row">
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="id_reclamacao" name="id_reclamacao" type="text" class="validate"
                       placeholder="0">
                <label for="id_reclamacao">Id reclamacao:</label>
            </div>
        </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="resposta" name="resposta" type="text" class="validate"
                           placeholder="Resposta">
                    <label for="Resposta">Resposta:</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit">Responder
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
@endsection
