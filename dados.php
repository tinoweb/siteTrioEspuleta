<?php

 include_once  "conexao.php";

 $nome          = $_POST['nome'];
 $email          = $_POST['email'];
 $endereco    = $_POST['endereco'];
 $telefone      = $_POST['telefone'];

 // Estados do Pedidos
 // -> processando (P)
 // -> entregue (E)

 $sql = "INSERT INTO compras (nome, email, endereco, teleffone, estado_pedido) VALUES ('$nome', '$email', '$endereco','$telefone', 'P')";

 mysql_query($sql) or die(error());

 if (mysql_query($sql)) {
    echo "Dados enviados com sucesso!";
 }else{
    echo "Falha ao enviar os dados!";
 }



 ?>
