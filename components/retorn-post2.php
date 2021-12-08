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
<p></p><div class="post2">

        <!--Campos da postagem principal-->
        <p class="campos-post2">Tema: <?php echo $tema;?></p>
        <p class="campos-post2">Notícia: <?php echo $titulo;?></p>
        <br><img src="imgs-posts/<?php echo ""."/".$imagem;?>" width="100%"> 
        <p class="campos-post2"><?php echo $relevantes;?></p>
        <p class="campos-post2"><?php echo $noticia;?></p>
        <p class="campos-post2">Data: <?php echo $dt;?></p>
        <p class="campos-post2">Hora: <?php echo $hr;?></p>
        <p class="campos-post2">Reporter: <?php echo $usuario;?></p>
        <hr>

</div></p>
<!--Fim da div da postagem-->


<?php
    } // Fechando a arquivo php com declarações das variáveis
?>

<style type="text/css">
    /* Estilizando os campos da postagem principal */
.post2{
    width: 20%;
    height: auto;
    float: right;
    margin-right: 50px;
    margin-top: 100px;
}

.campos-post2{
    font-size: 10px;
    font-family: Arial;
    color: #363636;
    text-align: justify;
}
  
</style>