<?php
session_start(); // Estartando a sessão
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
    <title>News</title>
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
            <li><a href="#" class="links-li">Sports</a></li>
            <li><a href="#" class="links-li">Mercado</a></li> 
            <li><a href="#" class="links-li">Varejo</a></li>        
            <li><a href="#" class="links-li">Turismo</a></li>        
            <li><a href="#" class="links-li">Atacado</a></li>               
        </div>
 
    </menu>
        <h2>NEWS</h2>
        <h3>A NOTÍCIA EM PRIMEIRO LUGAR</h3> 
    <!--Fim do menu-->


    <!--Início da nav-->
    <nav>
        <hr>
        <br>
           <a href="#" class="links-nav">Tecnologia</a>
           <a href="#" class="links-nav">Mundo</a>
           <a href="#" class="links-nav">Cotidiano</a>
           <a href="#" class="links-nav">Poder</a>
           <a href="#" class="links-nav">Cultura</a>
           <a href="#" class="links-nav">Sports</a>
        </br>
    </nav>
    <!--Fim da nav-->


    <!--Início da div inferior-->
    <div id="nav-inferior">
        <a href="#" class="link-nav-inferior">Assine o News e tenha sempre as melhores notícias em primeira mão!</a>

        <form action="search" method="POST" action="search.php">
            <input type="search" name="search" class="search" placeholder="Buscar">
        </form>
    </div>
    <!--Fim da div inferior-->


    <!--Iníco do main centro da página-->
    <main>
        Centro
    </main>
    <!--Fim do main centro da página-->


    <!--Início do footer-->
    <footer>
        <ul class="ul-footer">Serviços:
            <p>
            <li><a href="#" class="links-footer">Classificados</a></li>
            <li><a href="#" class="links-footer">Loterias</a></li>
            <li><a href="#" class="links-footer">Tempo</a></li>
            <li><a href="#" class="links-footer">Informações</a></li>
            </p>
        </ul>

        <ul class="ul-footer">Opnião:
            <p>
            <li><a href="#" class="links-footer">Colunas</a></li>
            <li><a href="#" class="links-footer">Blog</a></li>
            <li><a href="#" class="links-footer">Opnião</a></li>
            <li><a href="#" class="links-footer">Especias</a></li>
            </p>
        </ul>

        <ul class="ul-footer">Canais:
            <p>
            <li><a href="#" class="links-footer">Agora</a></li>
            <li><a href="#" class="links-footer">Eventos</a></li>
            <li><a href="#" class="links-footer">Email</a></li>
            <li><a href="#" class="links-footer">Telefone</a></li>
            </p>
        </ul>

        <ul class="ul-footer">Outros:
            <p>
            <li><a href="#" class="links-footer">Expediente</a></li>
            <li><a href="#" class="links-footer">Projetos</a></li>
            <li><a href="#" class="links-footer">Treinamento</a></li>
            <li><a href="#" class="links-footer">Acervo</a></li>
            </p>
        </ul>

        <ul class="ul-footer">Editorial:
            <p>
            <li><a href="#" class="links-footer">Mundo</a></li>
            <li><a href="#" class="links-footer">Esporte</a></li>
            <li><a href="#" class="links-footer">Comida</a></li>
            <li><a href="#" class="links-footer">Saúde</a></li>
            </p>
        </ul>

        <ul class="ul-footer">Fale Conosco:
            <p>
            <li><a href="#" class="links-footer">Painel</a></li>
            <li><a href="#" class="links-footer">Anuncie</a></li>
            <li><a href="#" class="links-footer">Assine</a></li>
            <li><a href="#" class="links-footer">Reclame</a></li>
            </p>
        </ul>
    </footer>
    <!--Fim do footer-->


</body>
</html>