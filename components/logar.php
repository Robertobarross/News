<?php
// Arquivo para login, está vinculado com login.php 
include "connect-db.php"; // O include da acesso ao Banco de Dados 

$email = $_POST['email'];
$password = $_POST['password'];

if($email != "" && $password != "") {
	//echo "Usuário logado";

	// Cód. para aceitar apenas email e senha já cadastrados.
	$sql = mysqli_query($link,"SELECT * FROM tb_adm WHERE email = '$email' ");
    $sql = mysqli_query($link,"SELECT * FROM tb_adm WHERE password = '$password' ");

	$registro = mysqli_num_rows($sql); // Trás uma consulta do registro de email do Banco de Dados.
	//echo $registro;

	// O cód. a baixo verifica se a senha já é cadastrada.
	while ($line = mysqli_fetch_array($sql)) {
		$senha_user = $line['password'];
        $nivel = $line['nivel'];// Direciona o usuário para o nível em que foi cadastrado, seja usuário ou adm.
	}
    // O código a baixo é responsável por identificar o nível, se usuário ou adm, e o direciona para página específica.
    if($registro){
    	if ($senha_user == $password) {
    	session_start();
    	$_session['login'] = $email;
    	$_session['password'] = $password;
    	if ($nivel == 'adm') {
    		header('location:/projetos-php/news/pages/nav.php');
		}
    }

    // Os códigos a baixo enviam uma mensagem de erro caso as informaçoes de cadastro estejam incorretas.
    }else{
    	echo "<p style='font-family:arial black; color:red;'>Você não é cadastrado!</p>";
    	echo "<p style='font-family:arial black; color:blue;'><a href='/projetos-php/news/pages/index.php'>Retornar</a></p>";
    }
}

?>