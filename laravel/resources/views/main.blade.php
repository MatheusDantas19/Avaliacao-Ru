<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>FeedBack - Ru</title>
</head>
<body>

<nav>
    <div class="nav-wrapper">
        <div class="container">
            <a href="/" class="brand-logo">Feedback-RU</a>
            <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/signup">Sign Up</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/quemsomos">Quem Somos</a></li>
                <li><a href="/loginAdmin">Administrador</a></li>
            </ul>
        </div>

    </div>
</nav>

<ul class="sidenav" id="menu-responsive">
    <li><a href="/signup">Sign Up</a></li>
    <li><a href="/login">Login</a></li>
    <li><a href="/quemsomos">Quem Somos</a></li>
</ul>

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
    <div class="footer-copyright">
        <div class="container">
            © 2019 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        M.AutoInit();
    })
</script>
</body>
