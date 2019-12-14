@extends ("on")
@section ("conteudo")
<form method="POST">
  <div class="row">
    <div class="col 6">
      <label>Campus</label>
      <select class="browser-default">
        <option value="" disabled selected>Escolha Campus</option>
        <option value="1">Coroado - Setor Sul </option>
        <option value="2">Coroado - Setor Norte</option>
        <option value="3">Centro - Medicina</option>
      </select>
    </div>
    <div class="col 6">
      <label>Dia Da Semana</label>
      <select class="browser-default">
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
      <select class="browser-default">
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

<h4>Pratos</h4>

<table class="centered">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Ingredientes</th>

    </tr>
  </thead>


  <tbody>
    <tr>
      <td>Macarronada</td>
      <td>macarão, SAL, Cebola</td>

    </tr>
    <tr>
      <td>Sopão</td>
      <td>Resto da Semana</td>
    </tr>
    <tr>
      <td>Salada</td>
      <td>Tomate, Alface, Pepino, Limão, Sal</td>
    </tr>
  </tbody>
</table>
@endsection