<?php


$n_pessoas = $_POST['us_pessoas'];
$bolo_de_corte = $_POST['us_bolos'];
$docinhos = $_POST['us_docinhos'];
$salgadinhos = $_POST['us_salgadinhos'];
$lanches = $_POST['us_lanches'];
$geladinhos = $_POST['us_geladinhos'];
$bebidas = $_POST['us_bebidas'];
$funcionarios = $_POST['us_funcionarios'];



        include("conexao.php");


		$sql = "INSERT INTO kits (n_pessoas,bolo_de_corte,docinhos,salgadinhos,lanches,geladinhos,bebidas,funcionarios)
        VALUES ('$n_pessoas','$bolo_de_corte','$docinhos','$salgadinhos','$lanches','$geladinhos','$bebidas','$funcionarios')";


        if(mysqli_query($conexao , $sql)){

            echo "<center> <h1> <i>Seu kit foi cadastrado com sucesso!</i></h1></center>";
            echo "<center><a href='pagcadastro_kits.html'><font color = 'IndianRed'>Cadastrar novo kit</a></font><br></center>";
            echo "<center><p><a href='Tcc L.E.B.html'><font color = 'MediumOrchid'>Página inicial</a></font>,</center>";
        }
        else{
            echo "Error: ".$sql."<br>".mysqli_error($conexao);
        }


        mysqli_close($conexao);


?>