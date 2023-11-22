<?php
include("conexao.php");
$email = $_POST["email"];
$senha = $_POST["senha"];

$resultado = $conexao->query("SELECT * FROM loginclientes  WHERE email = '$email' and senha = '$senha' ");
session_start();

$linhas = $resultado->num_rows;

if ($linhas==0)
{
	echo "<script>alert('usuario ou senha incorreto!');</script>";
	echo "<meta http-equiv='refresh' content='0, url=pag_entrar_login.php?codigo=0'>";
}
else
	{
		while ($rows = mysqli_fetch_array($resultado))
        {
            $_SESSION["nome"] = $rows["nome"];
            $_SESSION["email"] = $rows["email"];
            $_SESSION["senha"] = $rows["senha"];

        }
		
	echo "<meta http-equiv='refresh' content='0, url=paginicial_cliente.html'>";
	
	//echo "<html><body>";
	//echo "<p align =\"center\"> login realizado com sucesso!</p>";
	//echo "<p align =\"center\"> <a href =\"paginicial_cliente.html\">  Ir para tela inicial </a> </p></p>";
	//echo "</body> </html>";
    }


$conexao -> close();
?>