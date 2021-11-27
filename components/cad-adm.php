<?php

// Arquivo da conexão com o bd
include "connect-db.php";

// Declarando variáveis do form-cad-adm
@$foto = $_FILES['foto']['name'];
@$tipo = $_FILES['foto']['type'];
@$usuario = $_POST['usuario'];
@$email = $_POST['email'];
@$password = $_POST['password'];
@$repetepassword = $_POST['repetepassword'];
@$nivel = $_POST['nivel'];

$cadastro = false; // Para que os campos sejam preenchidos
if($foto != "" && $usuario != "" && $email != "" && $password != "" && $repetepassword != "" && $nivel != "")

// Confima se passwor é igual a repetepassword
if($password != $repetepassword) {
    echo "<script>alert('Senha não é igual');window.history.go(-1)</script>";
}

else {
    echo $registro = true; // Se as senhas estiverem corretas o registro é validado 
}

// Insere as informações na tabela do bd 
@mysqli_query($link,"INSERT INTO tb_adm(foto,usuario,email,password,repetepassword,nivel)VALUES('$foto','$usuario','$email','$password','$repetepassword','$nivel')");

// Texto que confirma o cadastro. Editado com css 
echo "<p style='text-align:center; color:black; padding:5px;'>Usuário cadastrado com sucesso!</b>";

?>