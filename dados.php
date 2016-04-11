<?php

 $username = "root";
 $password = "tino";


 include_once  "conexao.php";

 $nome          = $_POST['nome'];
 $email          = $_POST['email'];
 $endereco    = $_POST['endereco'];
 $telefone      = $_POST['telefone'];

 $sql = "INSERT INTO compras (nome, email, endereco, teleffone) VALUES ('$nome', '$email', '$endereco','$telefone')";

 mysql_query($sql) or die(error());

 if (mysql_query($sql)) {
    echo "Dados enviados com sucesso!";
 }else{
    echo "Falha ao enviar os dados!";
 }

 // $response = array("success" => true);
 // echo json_encode($response);



 ?>