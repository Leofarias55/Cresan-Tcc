<?php

include("conexao.php");
$usuario =$_POST["usuario"];
$senha =$_POST["senha"];


$resultado = $conexao->query("SELECT * FROM login  WHERE usuario = '$usuario' and senha = '$senha' ");
session_start();

$linhas = $resultado->num_rows;

if ($linhas==0)
{
	echo "<meta http-equiv='refresh' content='0, url=paglogin_adm.html'>";
	//echo "<html><body>";
	//echo "<p align =\"center\"> ADM nao encontrado!</p>";
	//echo "<p align =\"center\"> <a href =\"pag_entrar.html\"> voltar</a> </p>";
	//echo "</body> </html>";
}
else
	{
		while ($rows = mysqli_fetch_array($resultado))
        {
           
            $_SESSION["usuario"] = $rows["usuario"];
            $_SESSION["senha"] = $rows["senha"];

        }
	echo "<meta http-equiv='refresh' content='0, url=paginicial_adm.html'>";
	
	//echo "<html><body>";
	//echo "<p align =\"center\"> login realizado com sucesso!</p>";
	//echo "<p align =\"center\"> <a href =\"paginicial_cliente.html\">  Ir para tela inicial </a> </p></p>";
	//echo "</body> </html>";
    }


$conexao -> close();
?>