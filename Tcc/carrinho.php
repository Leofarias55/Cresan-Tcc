<form action="paginicial_cliente.html" method="POST">

 <?php
       $cbxKITS = $_POST['cbxKITS'];
       $cbxTEMAS = $_POST['cbxTEMAS'];
       $cbxEQUIPE = $_POST['cbxEQUIPE'];
       $cbxLOCAL = $_POST['cbxLOCAL'];
	  
      // $outrolocal = $_post['outrolocal'];
      // $outrotema = $_post['outrotema'];	   
		 
		 
		 
	// include("cod_cadastro.php"); 
	// $cpf = $_POST['us_cpf'];
	 
	 
	 include("conexao.php");


		$sql = "INSERT INTO pedidos (kit, tema, equipe, local) 
		VALUES ('$cbxKITS','$cbxTEMAS','$cbxEQUIPE','$cbxLOCAL')";	 
		
		if(mysqli_query($conexao , $sql)){

            echo "<center> <h1> <i>envie para receber o or�amento e fechar seu contrato!</i></h1></center>";
        }
        else{
            echo "Error: ".$sql."<br>".mysqli_error($conexao);
        }


        mysqli_close($conexao);

		 

		 
// N�mero de telefone para o qual voc� deseja enviar uma mensagem no formato internacional (com c�digo do pa�s)
$numeroTelefone = '+55 21972607008';

// Mensagem que voc� deseja enviar (opcional)
$mensagem = "Ol�, esse � o meu pedido:". $cbxKITS ."," . $cbxTEMAS .",". $cbxEQUIPE ."," . $cbxLOCAL ;

// Construa a URL do link do WhatsApp
$urlWhatsApp = 'https://api.whatsapp.com/send?phone=' . urlencode($numeroTelefone) . '&text=' . urlencode($mensagem);

// Exiba o bot�o de link para o WhatsApp
echo '<a href="<center> <h1> <i>' . $urlWhatsApp . '" target="_blank">Enviar mensagem no WhatsApp/a></i></h1></center>';
?>
