<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Ru Restaurante Universitário </title>
</head>

<body>
    <ul id="dropConta" class="dropdown-content">
        <li><a href="/alterar">Alterar seus dados</a></li>
        <li class="divider"></li>
    </ul>
    <!-- <ul id="dropRU" class="dropdown-content">
        <li><a href="/createRU">Cadastrar novo RU</a></li>
        <li class="divider"></li>
        <li><a href="/updateAdminRU">Administrar novo RU</a></li>
        <li class="divider"></li>
        <li><a href="updateRU">Alterar dados de RU</a></li>
        <li class="divider"></li>
        <li><a href="/deleteAdminRU">Deixar de Administrar um RU</a></li>
        <li class="divider"></li>
        <li><a href="/deleteRU">Excluir RU</a></li>
    </ul> -->
    <ul id="dropPrato" class="dropdown-content">
        <li><a href="/pratos">Buscar prato</a></li>
    </ul>
    <!-- <ul id="dropIngrediente" class="dropdown-content">
        <li><a href="/createIngrediente">Cadastrar novo Ingrediente</a></li>
        <li class="divider"></li>
        <li><a href="/updateIngrediente">Alterar informações de Ingrediente</a></li>
        <li class="divider"></li>
        <li><a href="/deleteIngrediente">Excluir Ingrediente</a></li>
    </ul> -->
    <ul id="dropReclamacao" class="dropdown-content">
        <li><a href="/criaReclamacao">Enviar uma reclamação</a></li>
        <li class="divider"></li>
        <li><a href="/verReclamacao">Ver reclamação</a></li>
        <!-- <li class="divider"></li>
        <li><a href="#!">Excluir Resposta</a></li> -->
    </ul>
    <nav class="nav-extended">
        <div class="nav-wrapper">
            <div class="container">
                <a href="mainAdmin" class="brand-logo">RU Restaurante Universitário</a>
                <a href="#" data-target="menu-responsive" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/logout">Sair</a></li>
                </ul>
            </div>
        </div>
        <div class='nav-wrapper'>
            <div class="container">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a class="dropdown-trigger" href="#!" data-target="dropReclamacao">Reclamação<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropConta">Conta<i class="material-icons right">arrow_drop_down</i></a></li>
                    <!-- <li><a class="dropdown-trigger" href="#!" data-target="dropRU">Gerir RU<i class="material-icons right">arrow_drop_down</i></a></li> -->
                    <li><a class="dropdown-trigger" href="#!" data-target="dropPrato">Pratos<i class="material-icons right">arrow_drop_down</i></a></li>
                    <!-- <li><a class="dropdown-trigger" href="#!" data-target="dropIngrediente">Gerir Ingredientes<i class="material-icons right">arrow_drop_down</i></a></li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="/dashboard" class="brand-logo">Ru Restaurante Universitário</a>
                <a href="/dashboard" data-target="menu-responsive" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/pratos">Pratos</a></li>
                    <li><a href="/reclamacao">Reclamação</a></li>
                    <li><a href="/alterar">Alterar Dados</a></li>
                    <li><a href="/contato">Contato/Ajuda</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <ul class="sidenav" id="menu-responsive">
        <li><a href="/pratos">Pratos</a></li>
        <li><a href="/reclamacao">Reclamação</a></li>
        <li><a href="/alterar">Alterar Dados</a></li>
        <li><a href="/contato">Contato/Ajuda</a></li>
        <li><a href="/logout">Logout</a></li>

    </ul> -->

    <div class="container">
        <h3>@yield('cabecalho')</h3>

        @yield('conteudo')

    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                        content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Equipe do projeto:</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="https://github.com/MatheusDantas19">Matheus Dantas</a>
                        </li>
                        <li><a class="grey-text text-lighten-3" href="https://github.com/TaniziaFagundes">Tanizia
                                Fagundes</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://github.com/kkkalil">Kalil Fernandes</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Vinicius</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- imagem git--}}
        <div class="carousel carousel-slider" style="height:600px;">
             <a class="carousel-item" href="#one!"><img src="https://www.fastcommerce.com.br/lojas/00000001/images/GitHub_Octocat.png?cccfc=1"></a>
        </div>  

        <div class="footer-copyright">
            <div class="container">
                © 2019 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        })
    </script>
</body>