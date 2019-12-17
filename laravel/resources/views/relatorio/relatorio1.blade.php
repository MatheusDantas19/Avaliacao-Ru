@extends('admin.padrao')
@section('cabecalho')
Relatório 1
@endsection
@section('conteudo')
<table class="highlight">
    <thead>
        <tr>
            <th>Prato:</th>
            <th>Numero de reclamações:</th>
        </tr>
    </thead>

    <tbody>
        <?php $i = 0; ?>
        @foreach($pratos as $p)
        <tr>
            <td>{{$p->nome}}</td>
            <td>{{$p->count}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection