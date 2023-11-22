<?php
$servidor = "localhost";
$nomeroot = "root";
$senharoot = "";
$bd = "cresan";

$conexao = mysqli_connect($servidor, $nomeroot, $senharoot, $bd);
$_SESSION['conexao'] = $conexao;
if (!$conexao)
{
   die("Houve um erro: ".mysqli_connect_error());
}

?>