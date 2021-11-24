<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link do ícone-->
    <link rel="shortcut icon" href="/projetos-php/news/components/imgs/logo-news.png" type="image/x-icon">
    <!--Link do arquivo CSS-->
    <link rel="stylesheet" href="/projetos-php/news/components/style.css">
    <title>POST SECUNDARIO</title>
</head>
<body>

    <!--Topo da página-->
    <div id="topo">
        <img src="/projetos-php/news/components/imgs/globo-terrestre.jpg" class="clobo-terrestre" alt="Globo terrestre">
        <h1>NEWS</h1>

        <a href="#" class="links-topo">E-mail</a>
    </div>
    <!--Fim do topo-->


    <!--Início do menu-->
    <menu>
        <button title="MENU" type="button" onclick="if(document.getElementById('menu') .style.display=='none') {document.getElementById('menu') .style.display=''}
        else{document.getElementById('menu') .style.display='none'}" class="mostrar-ocultar">
        <div> 
            <img src="/projetos-php/news/components/imgs/img-menu.png" alt="Menu" class="botao-menu">
        </div>
        </button>
        <div id="menu" style="display:none">
            <li><a href="login.php" class="links-li">Login</a></li>
            <li><a href="index.php" class="links-li">Inicio</a></li>
            <li><a href="nav.php" class="links-li">Painel de Navegação</a></li>
            <li><a href="form-post1.php" class="links-li">Notícias Principais</a></li>
            <li><a href="#" class="links-li">Mercado</a></li> 
            <li><a href="#" class="links-li">Varejo</a></li>        
            <li><a href="#" class="links-li">Turismo</a></li>        
            <li><a href="#" class="links-li">Atacado</a></li>               
        </div>

        <h2>NEWS</h2>
        <h3>A NOTÍCIA EM PRIMEIRO LUGAR</h3>
    </menu>
    <hr>
    <!--Fim do menu-->

    <div id="cad">
        <h4>CADASTRAR NOTÍCIAS SECUNDARIAS</h4>

        <form action="cad.php" method="POST" enctype="multipart/form-data">

            <p><input type="file" name="foto" class="campos-form"></p>
            <p><input type="text" name="usuario" class="campos-form" placeholder="Cadastrar nome do usuário" required></p>
            <p><input type="email" name="email" class="campos-form" placeholder="Cadastrar e-mail" required></p>
            <p><input type="password" name="senha" class="campos-form" placeholder="Cadastrar senha"></p>
            <p><input type="password" name="repete-senha" class="campos-form" placeholder="Confirmar senha"></p>

            <select name="nivel" class="campos-form">
                <option value="user" class="campos-form">ADM</option>
            </select>

            <p><button type="submit" value="cadastrar" class="btn">Cadastrar</button>
            <input type="reset" value="limpar" class="btn"></p>

        </form>
    </div>
        
    </body>
    </html>