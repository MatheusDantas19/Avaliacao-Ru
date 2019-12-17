@extends('admin.padrao')
@section('cabecalho')
Relatório 1
@endsection
@section('conteudo')
<table class="highlight">
    <thead>
        <tr>
            <th>qtd_reclamação:</th>
            <th>id_ingrediente:</th>
            <th>nome:</th>
            <th>descricao:</th>
        </tr>
    </thead>

    <tbody>
        <?php $i = 0; ?>
        @foreach($pratos as $p)
        <tr>
            <td>{{$p->qtd_reclamacao}}</td>
            <td>{{$p->id_ingrediente}}</td>
            <td>{{$p->nome}}</td>
            <td>{{$p->descricao}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
