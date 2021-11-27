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
    <title>POST PRINCIPAL</title>
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
            <li><a href="form-post2.php" class="links-li">Notícias Secudarias</a></li>
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

    <div id="cad">
        <h4>CADASTRAR NOTÍCIAS PRINCIPAIS</h4>

        <form action="cad.php" method="POST" enctype="multipart/form-data">

            <select name="nivel" class="campos-form" required>
                <option value="adm" class="campos-form">Tecnologia</option>
                <option value="adm" class="campos-form">Mundo</option>
                <option value="adm" class="campos-form">Cotidiano</option>
                <option value="adm" class="campos-form">Poder</option>
                <option value="adm" class="campos-form">Cultura</option>
                <option value="adm" class="campos-form">Sports</option>
                <option value="adm" class="campos-form">Política</option>
            </select>

            <p><input type="file" name="foto" class="campos-form"></p>
            <p><input type="text" name="titulo" class="campos-form" placeholder="Dê um titulo para notícia" required></p>
            <p><input type="text" name="informes" class="campos-form" placeholder="Informações relevantes" required></p>
            <textarea rows="10" cols="50" class="campos-form" placeholder="Descreva as informções para essa notícia com no máximo 300 caracteres" maxlength="300" required></textarea>
            <p><input type="date" name="dt" class="campos-form" required></p>
            <p><input type="time" name="hr" class="campos-form" required></p>

            <p><button type="submit" value="cadastrar" class="btn">Enviar</button>
            <input type="reset" value="limpar" class="btn"></p>

        </form>
    </div>
        
    </body>
    </html>