<?php // Restrição a usuário não logado

session_start(); // Estartando a sessão

if(isset($_POST['email'])) { // Declarando variáveis da conexão
    $email = $_POST['email'];
}

if(isset($_POST['password'])) { // Declarando variáveis da conexão
    $password = $_POST['password'];

    if($email == "email" and $password == "password") { // Se email e password estiveram cadastrados
        $_SESSION['login'] =  true; // O login será autorizado
    }
}

if(!isset($_SESSION['login'])) { // Se o usuário não tiver cadastro será redirecionado para tela de login
    header('location:login.php');
}

?>



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
        </div>
    </menu>
        <h2>NEWS</h2>
        <h3>A NOTÍCIA EM PRIMEIRO LUGAR</h3>
    <hr>
    <!--Fim do menu-->


    <!--Usuário logado-->
    <div id="user">
        
        <?php
           echo "Bem vindo(a); "; echo $_SESSION['email']; // Usuário logado
       ?>

    </div>
    <!--Usuário logado-->
    

    <div id="cad">
        <h4 color="blue">CADASTRAR NOTÍCIAS SECUNDÁRIAS</h4>

        <form action="/projetos-php/news/components/post2.php" method="POST" enctype="multipart/form-data">

            <p><input type="text" name="tema" class="campos-form" placeholder="Tema" required></p>
            <p><input type="file" name="imagem" class="campos-form"></p>
            <p><input type="text" name="titulo" class="campos-form" placeholder="Dê um titulo para notícia" required></p>
            <p><input type="text" name="relevantes" class="campos-form" placeholder="Informações relevantes" required></p>
            <textarea name="noticia" rows="10" cols="50" class="campos-form" placeholder="Descreva as informções para essa notícia com no máximo 800 caracteres" maxlength="800" required></textarea>
            <p><input type="date" name="dt" class="campos-form" required></p>
            <p><input type="time" name="hr" class="campos-form" required></p>
            <p><input type="text" name="usuario" class="campos-form" placeholder="Usuário" required></p>

            <p><button type="submit" value="cadastrar" class="btn">Enviar</button>
            <input type="reset" value="limpar" class="btn"></p>

        </form>
    </div>
        
    </body>
    </html>