<?php 
$username = "root";
$password = "1234";

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$quantidade = $_POST['quantidade'];



try { $pdo = new PDO('mysql:host=localhost;dbname=trioespuleta', $username, $password); 

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

		$stmt = $pdo->prepare('INSERT INTO compras VALUES(:nome,:email,:endereco,:telefone)'); 

		$stmt->execute(array( ':nome' => $nome,':email' => $email,':endereco' => $endereco,':telefone' => $telefone)); 

		echo $stmt->rowCount(); 

} 

	catch(PDOException $e) 

{ echo 'Error: ' . $e->getMessage(); ?>
}

 ?>