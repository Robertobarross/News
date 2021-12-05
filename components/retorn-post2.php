<?php 

include 'connect-db.php'; // Link da conxão

$sql = mysqli_query($link, "SELECT * FROM tb_post2 ORDER BY tema DESC");// faz a consulta na tabela do bd 
	while($line = mysqli_fetch_array($sql)){ 

        // Variáveis da coneção 
        $tema = $line['tema'];
	    $imagem = $line['imagem'];
        $titulo = $line['titulo'];
        $relevantes = $line['relevantes'];
        $noticia = $line['noticia'];
        $dt = $line['dt'];
        $hr = $line['hr'];
        $usuario = $line['usuario'];
    
 
?>

<!--Div da postagem-->
<div id="post2">

    <div id="campos-post2">
        <!--Campos da postagem principal-->
        <p>Tema: <?php echo $tema;?></p>
        <p>Notícia: <?php echo $titulo;?></p>
        <br><img src="imgs-posts/<?php echo ""."/".$imagem;?>" width="80%"> 
        <p><?php echo $relevantes;?></p>
        <p><?php echo $noticia;?></p>
        <p>Data: <?php echo $dt;?></p>
        <p>Hora: <?php echo $hr;?></p>
        <p>Reporter: <?php echo $usuario;?></p>
    </div>

</div>
<!--Fim da div da postagem-->


<?php
    } // Fechando a arquivo php com declarações das variáveis
?>

<style type="text/css">
    /* Estilizando os campos da postagem principal */

    #post2{
        float: right; 
        width: 50%;
        margin-right: 30px;
        margin-top: -3385px;
       /* display: inline-block; */
       border: 1px solid black;
    }

    p{
        font-size: 15px;
        font-family: Arial;
        color: #363636;
        text-align: justify;
    }

    #campos-post2{
        width: 40%;
        margin-right: 20px;
        display: inline-block;
    }

</style>