<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <title>Tela Inicial</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="/" class="brand-logo">Sistema de Feedback do RU</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/signup">Sign Up</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h3>Criar Conta</h3>
        <div class="row">
            <form class="col s12" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="nome" name="nome" type="text" class="validate"
                        placeholder="Matheus Inacio Nascimento Dantas" >
                        <label for="nome">Nome Completo:</label>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="matricula" name="matricula" type="text" class="validate"
                            placeholder="21750861">
                            <label for="matricula">Matricula:</label>
                        </div>
                    </div>

                    <div class="input-field col s6">
                        <input id="curso" name="curso" type="text" class="validate"
                        placeholder="Engenharia de Software">
                        <label for="curso">Curso:</label>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="senha" name="senha" type="password" class="validate"
                            placeholder="****">
                            <label for="senha">Senha:</label>
                        </div>
                    </div>

                    <button class="btn waves-effect waves-light" type="submit">Criar Conta
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>