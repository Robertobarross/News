<?php

// Arquivo responsável por inserir as informações no bd
include 'connect-db.php'; // Link da conexão
date_default_timezone_set('America/Sao_Paulo');// Define a data
session_start();// inicia ou recupera a sessão


// Variáveis que serão preenchidas no bd //
@$tema = $_POST['tema']??'';
@$imagem = $_FILES['imagem']['type']??'';
@$imagem = $_FILES['imagem']['name']??'';
@$titulo = $_POST['titulo']??'';
@$relevantes = $_POST['relevantes']??'';
@$noticia = $_POST['noticia']??'';
@$dt = $_POST['dt']??'';
@$hr = $_POST['hr']??'';
@$usuario = $_POST['usuario']??'';

// Chamada do link da conexão
mysqli_query($link, "INSERT INTO tb_post1(tema,imagem,titulo,relevantes,noticia,dt,hr,usuario)VALUES('$tema','$imagem','$titulo','$relevantes','$noticia','$dt','$hr','$usuario')");

header('location:/projetos-php/news/pages/form-post1.php');

?>