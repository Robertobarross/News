<?php

 include "C:/wamp64/www/Projetos-PHP/News/components/connect-db.php";

    @$search = $_POST['search'];
    $sql = mysqli_query($link, "SELECT * FROM tb_post1 WHERE tema LIKE '%".$search."%'");
    $row = mysqli_num_rows($sql);
    if($row > 0) {
    while($line = mysqli_fetch_array($sql)) {
        // Declarando variáveis
    $tema = $line['tema'];
    $imagem = $line['imagem'];
    $titulo = $line['titulo'];
    @$relevantes = $line['relevantes'];
    @$noticia = $line['noticia'];
    @$dt = $line['dt'];
    @$hr = $line['hr'];
    @$usuario = $line['usuario'];

?>


<div id="campos-serach">

    <!--Campos da postagem principal-->
    <p class="campos-post1">Tema: <?php echo $tema;?></p>
    <p class="campos-post1">Notícia: <?php echo $titulo;?></p>
    <br><img src="imgs-posts/<?php echo ""."/".$imagem;?>" width="70%"> 
    <p class="campos-post1"><?php echo $relevantes;?></p>
    <p class="campos-post1"><?php echo $noticia;?></p>
    <p class="campos-post1">Data: <?php echo $dt;?></p>
    <p class="campos-post1">Hora: <?php echo $hr;?></p>
    <p class="campos-post1">Reporter: <?php echo $usuario;?></p>

    <hr>
    <a href="index.php" class="campos-post1"><-- RETORNAR</a>

</div>

<?php // Finalizando o arquivo php
    }
    }
?>

<style type="text/css">
    /* Estilizando os campos da postagem principal */

    #campos-serach{
        width: 25%;
        margin-left: 85px;
        margin-top: 80px;
        float: left;
    }

    .campos-post1{
        font-size: 13px;
        font-family: Arial;
        color: #363636;
        text-align: justify;
    }

</style>