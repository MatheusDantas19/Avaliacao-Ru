@extends('on')
@section('cabecalho')
    Deseja fazer uma reclamação?
@endsection
@section('conteudo')
<div class="row">
    @isset($mensagem)
        {{$mensagem}}
    @endisset
    <form class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="row">
                <div class="col s5">
                    <label>Escolha o restaurante:</label>
                    <select name="restaurante" class="browser-default">
                        <option value="" disabled selected>Selecione o restaurante</option>
                        @foreach($restaurante as $res)
                            @if($opcao == $res->id_restaurante)
                                <option selected value="{{$res->id_restaurante}}">
                                    Campus:{{$res->campus}} Local:{{$res->local}} Setor:{{$res->setor}}
                                </option>
                            @else 
                                <option value="{{$res->id_restaurante}}">
                                    Campus:{{$res->campus}} Local:{{$res->local}} Setor:{{$res->setor}}
                                </option>
                            @endif
                            
                        @endforeach
                            {{-- <option value="1">Ru - Ufam Norte</option>
                        <option value="2">Ru - Ufam Sul</option>
                        <option value="3">Almôndega</option> --}}
                    </select>
                </div>

                <button style="margin-top: 25px;" class="btn waves-effect waves-light" name="buscaPrato" type="submit">Pesquisar pratos
                    <i class="material-icons right">search</i>
                </button>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="data" name="data" type="date" class="validate" >
                    <label for="data">Escolha a data de ocorrência:</label>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <label>Escolha a categoria do prato:</label>
                    <select name="categoria" class="browser-default">
                        <option value="" disabled selected>Selecione um prato</option>
                        <option value="normal">Normal</option>
                        <option value="vegetariano">Vegetariano</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <label>Escolha o prato da reclamação:</label>
                    <select name="prato" class="browser-default">
                        <option value="" disabled selected>Selecione um prato</option>
                        @isset($pratos)
                            @foreach($pratos as $p)
                                <option value="{{$p->id_prato}}">{{$p->nome}}</option>
                            @endforeach
                        @endisset
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s6">
                  <textarea name="descricao" id="icon_prefix2" class="materialize-textarea"></textarea>
                  <label for="icon_prefix2">Descrição da reclamação</label>
                  <i class="material-icons prefix">mode_edit</i>
                </div>
            </div>
              
            <button class="btn waves-effect waves-light" name="submit" type="submit">Enviar reclamação
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>

@endsection