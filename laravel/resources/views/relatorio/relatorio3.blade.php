@extends('admin.padrao')
@section('cabecalho')
Relatório 3
@endsection
@section('conteudo')
<div class="row">
        <form class="col s12" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input id="id_restaurante" name="id_restaurante" type="text" class="validate"
                           placeholder="0">
                    <label for="id_restaurante">id_restaurante:</label>
                </div>
            </div>


                <button class="btn waves-effect waves-light" type="submit">Buscar reclamações por prato
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>

<table class="highlight">
    <thead>
        <tr>
            <th>nome do prato:</th>
            <th>qtd alunos que reclamaram:</th>
        </tr>
    </thead>

    <tbody>
        <?php $i = 0; ?>
        @foreach($pratos as $p)
        <tr>
            <td>{{$p->nome}}</td>
            <td>{{$p->qtdAlunos}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
