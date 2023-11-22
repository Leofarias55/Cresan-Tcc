<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="temas.css">
	<title>pagina de temas</title>
 </head>
 
 <body>
             <div class="text">
			 <p>
             <strong>estes sâo todos os temas disponiveis:</br>caso queira um fora de nosso catalogo, informe no carrinho ou entre em contato conosco.</strong>
             </p>
             </div>
            <?php include("conexao.php"); 
			$contador = 0;
		    $sql="SELECT * FROM temas";
			$resultado=mysqli_query($conexao, $sql);
			if (mysqli_num_rows($resultado) >0){

				while($row = mysqli_fetch_array($resultado))
				{
					if ($contador == 0) echo"<div class='row'>";
	        ?>				
					<div id='titulo' class='col-3'>
						 <div class='card' >
						   <img src="<?php echo "\\Tcc\\imagens\\".$row['fotos'] ?>"  width="250" height="250"/>
						   <div> 
						      <h1>tema:</h1>
							  <h2 class = "titulo_tema"><?php echo $row['nome_tema'] ?></h2>
							  
							  <!--<span> tema:</span>-->
							  <button>click aqui</button>
							  
						   </div>
						</div>
					</div>
						
			<?php			
					$contador++;
					if($contador == 4)  
					{   $contador  = 0; 	
						echo"<div class='row'>";
							//echo"<div class='col-12'>";
							//echo "</div>";
						echo "</div>";
						echo "</div>";	 
					}		
				} 
            }?>
 
 </body>
</html>