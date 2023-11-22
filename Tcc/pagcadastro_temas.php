<?php


$nome_tema = $_POST['nome_tema'];
$imagem = $_FILES["fotos"]; 
        $nome = $imagem["name"];
echo $nome_tema;
echo  $nome;


        include("conexao.php");


		$sql = "INSERT INTO temas (fotos, nome_tema)
        VALUES ( '$nome','$nome_tema')";


        if(mysqli_query($conexao , $sql)){
			$caminho =  $_SERVER['DOCUMENT_ROOT'];            

            $dir = "Tcc\\imagens";
             
            // recebendo o arquivo de imagem
            $file = $_FILES["fotos"];

            // Move o arquivo da pasta temporaria de upload para a pasta de destino 
            if (move_uploaded_file($file["tmp_name"], $caminho. "\\$dir\\".$file["name"])) { 
                echo "Arquivo enviado com sucesso!"; 
            } 
            else { 
                echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
            } 
		}
        else{
            echo "Error: ".$sql."<br>".mysqli_error($conexao);
        }

        echo "<meta http-equiv='refresh' content='0, url=pagcadastro_temas.html'>";
        mysqli_close($conexao);


?>