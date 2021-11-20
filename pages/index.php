<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projetos-php/news/components/style.css">
    <title>News</title>
</head>
<body>


    <div id="topo">
        <img src="/projetos-php/news/components/imgs/globo-terrestre.jpg" class="clobo-terrestre" alt="Globo terrestre">
        <h1>NEWS</h1>

        <a href="#" class="links-topo">E-mail</a>
    </div>

    <menu>
        <button title="MENU" type="button" onclick="if(document.getElementById('menu') .style.display=='none') {document.getElementById('menu') .style.display=''}
        else{document.getElementById('menu') .style.display='none'}" class="mostrar-ocultar">
        <div> 
            <img src="/projetos-php/news/components/imgs/img-menu.png" alt="Menu" class="botao-menu">
        </div>
        </button>
        <div id="menu" style="display:none">
            <li><a href="#" class="links-li">Mundo</a></li>
            <li><a href="#" class="links-li">Economia</a></li>
            <li><a href="#" class="links-li">Sports</a></li>
            <li><a href="#" class="links-li">Mercado</a></li> 
            <li><a href="#" class="links-li">Varejo</a></li>        
            <li><a href="#" class="links-li">Turismo</a></li>        
            <li><a href="#" class="links-li">Atacado</a></li>               
        </div>
        </div>

        <h2>NEWS</h2>
        <h3>A NOTÍCIA EM PRIMEIRO LUGAR</h3>
    </menu>

    <nav>
        <hr>
        <br>
        <a href="#" class="links-nav">Últimas Notícias</a>
        <a href="#" class="links-nav">Mundo</a>
        <a href="#" class="links-nav">Cotidiano</a>
        <a href="#" class="links-nav">Poder</a>
        <a href="#" class="links-nav">Cultura</a>
        <a href="#" class="links-nav">Sports</a>
        </br>
    </nav>

    <div id="nav-inferior">
        <a href="#" class="link-nav-inferior">Assine o News e tenha sempre as melhores notícias em primeira mão!</a>
    </div>

    <main>
        Centro
    </main>

    <footer>
        Rodapé
    </footer>


</body>
</html>