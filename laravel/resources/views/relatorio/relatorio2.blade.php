@extends('admin.padrao')
@section('cabecalho')
Relatório 2
@endsection
@section('conteudo')
<table class="highlight">
    <thead>
        <tr>
            <th>qtd_reclamações não respondidas:</th>
            <th>id_admin:</th>
        </tr>
    </thead>

    <tbody>
        <?php $i = 0; ?>
        @foreach($pratos as $p)
        <tr>
            <td>{{$p->qtd_reclamacoes}}</td>
            <td>{{$p->id_admin}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
