@extends ("on")
@section('cabecalho')
Visualizar Pratos
@endsection
@section ("conteudo")
<div class="row">
  <form method="POST">
    @csrf
    <div class="row">
      <div class="col 6">
        <label>Restaurante</label>
        <select name='restaurante' class="browser-default">
          <option value="" disabled selected>Escolha o restaurante:</option>
          @foreach ($restaurante as $res)
          <option value="{{$res->id_restaurante}}">
            Campus:{{$res->campus}} Local:{{$res->local}} Setor:{{$res->setor}}
          </option>
          @endforeach
        </select>
      </div>

      <div class="col 6">
        <label>Dia Da Semana</label>
        <select name="dia" class="browser-default">
          <option value="" disabled selected>Escolha Dia</option>
          <option value="1">Segunda-Feira</option>
          <option value="2">Terça-Feira</option>
          <option value="3">Quarta-Feira</option>
          <option value="4">Quinta-Feira</option>
          <option value="5">Sexta-Feira</option>
          <option value="6">Sabado</option>
        </select>
      </div>

      <div class="col 6">
        <label>Turno</label>
        <select name="turno" class="browser-default">
          <option value="" disabled selected>Escolha Turno</option>
          <option value="1">Matutino</option>
          <option value="2">Vespertino</option>
          <option value="3">Noturno</option>
        </select>
      </div>

      <button style="margin-top: 25px" class="btn waves-effect waves-light" type="submit">Pesquisar
        <i class="material-icons right">search</i>
      </button>

    </div>
  </form>

  <table class="responsive-table">
    <thead>
      <tr>
        <th>Prato:</th>
      </tr>
    </thead>

    <tbody>
      @isset($pratos)
      @foreach($pratos as $pt)
      <tr>
        <th>{{$pt->nome}}</th>
      </tr>
      @endforeach
      @endisset
    </tbody>
  </table>
</div>
@endsection