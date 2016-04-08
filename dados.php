<?php 
 $username = "root";
 $password = "1234";
  
try {
    $conn = new PDO('mysql:host=localhost;dbname=trioespuleta', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


$sql = "INSERT INTO compras(nome,
            email,
            endereco,
            telefone) VALUES (
            :nome, 
            :email, 
            :endereco, 
            :telefone)";
                                          
$stmt = $pdo->prepare($sql);
                                              
$stmt->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);       
$stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR); 
$stmt->bindParam(':endereco', $_POST['endereco'], PDO::PARAM_STR);
$stmt->bindParam(':telefone', $_POST['telefone'], PDO::PARAM_STR);   
                                      
$stmt->execute(); 


 ?>