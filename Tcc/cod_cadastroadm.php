<?php


$usuario = $_POST['us_usuario'];
$senha = $_POST['senha'];



        include("conexao.php");


		$sql = "INSERT INTO login (usuario,senha)
        VALUES ('$usuario','$senha')";


        if(mysqli_query($conexao , $sql)){

            echo "<center> <h1> <i>ADM foi cadastrado com sucesso!</i></h1></center>";
            echo "<center><a href='pagcadastro_adm.html'><font color = 'IndianRed'>Cadastrar novo adm</a></font><br></center>";
            echo "<center><p><a href='Tcc L.E.B.html'><font color = 'MediumOrchid'>Página inicial</a></font>,</center>";
        }
        else{
            echo "Error: ".$sql."<br>".mysqli_error($conexao);
        }


        mysqli_close($conexao);


?>