<?php
  
$conn = "";
   
try {
    $servername = "localhost:3306";
    $dbname = "cresan";
    $usuario = "root";
    $senha = "";
   
    $conn = new PDO(
        "mysql:host=$servername; dbname=cresan",
        $usuario, $senha
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
?>