<?php


$nome = $_POST['us_cadastro'];
$cpf = $_POST['us_cpf'];
$email = $_POST['us_email'];
$telefone = $_POST['us_telefone'];
$senha = $_POST['senha'];

      

        include("conexao.php");


		$sql = "INSERT INTO loginclientes (nome,cpf,email,telefone,senha)
        VALUES ('$nome','$cpf','$email','$telefone','$senha')";


        if(mysqli_query($conexao , $sql)){

            echo "<center> <h1> <i>Seu cliente foi cadastrado com sucesso!</i></h1></center>";
            echo "<center><a href='pag_cadastro.html'><font color = 'IndianRed'>Cadastrar novo Cliente</a></font><br></center>";
            echo "<center><p><a href='Tcc L.E.B.html'><font color = 'MediumOrchid'>Página inicial</a></font>,</center>";
        }
        else{
            echo "Error: ".$sql."<br>".mysqli_error($conexao);
        }


        mysqli_close($conexao);


?>	
					
					
	       
					
						