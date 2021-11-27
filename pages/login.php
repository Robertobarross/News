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
    <title>LOGIN</title>
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
            <li><a href="form-cad.php" class="links-li">Cadastre-se</a></li>
            <li><a href="#" class="links-li">Sports</a></li>
            <li><a href="#" class="links-li">Mercado</a></li> 
            <li><a href="#" class="links-li">Varejo</a></li>        
            <li><a href="#" class="links-li">Turismo</a></li>        
            <li><a href="#" class="links-li">Atacado</a></li>               
        </div>
    </menu>
        <h2>NEWS</h2>
        <h3>A NOTÍCIA EM PRIMEIRO LUGAR</h3>
    <hr>
    <!--Fim do menu-->


    <!--Início da div login-->
    <div id="login">   
        <h4>LOGIN</h4>

        <form action="logar.php" method="POST" enctype="multipart/form-data">

            <br><img src="/projetos-php/news/components/imgs/icon-login.png" alt="Login" class="img-login">

            <p><input type="email" name="email" class="campos-form" placeholder="Digite seu e-mail" required></p>
            <p><input type="password" name="senha" class="campos-form" placeholder="Digite sua senha" required></p>

            <p><button type="submit" value="logar" class="btn">Logar</button>
            <input type="reset" value="limpar" class="btn"></p>

            <p><a href="#" class="link">Esqueci minha senha</a></p>
        </form>

    </div>
    <!--Fim da div login-->

    
</body>
</html>