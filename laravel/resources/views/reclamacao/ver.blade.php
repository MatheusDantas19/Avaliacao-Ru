@extends('on')
@section('cabecalho')
Reclamações Feitas
@endsection
@section('conteudo')

<table class="highlight">
    <thead>
        <tr>
            <th>Codigo da Reclamação:</th>
            <th>Data de ocorrência:</th>
            <th>Prato:</th>
            <th>Classificação</th>
            <th>Descrição</th>
            <th>Restaurante:</th>
            <th>Resposta:</th>
        </tr>
    </thead>

    <tbody>
        <?php $i = 0; ?>
        @foreach($consulta as $c)
        <tr>
            <td>{{$c->id_reclamacao}}</td>
            <td>{{$c->data_ocorrencia}}</td>
            <td>{{$c->nome}}</td>
            <td>{{$c->classificacao}}</td>
            <td>{{$vet[$i++]}}</td>
            <td>{{$c->campus}} {{$c->local}} {{$c->setor}}</td>
            <td><a href="" class="btn-floating light-blue"><i class="material-icons">visibility</i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection