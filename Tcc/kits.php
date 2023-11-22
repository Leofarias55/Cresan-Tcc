<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="kits.css">
	<title>pagina de kits</title>
 </head>
 
 <body>
            <div class="text">
			 <p>
             <strong>estes sâo todos os kits disponiveis:</strong>
             </p>
             </div>
 
            <?php include("conexao.php"); 
			$contador = 0;
		    $sql="SELECT * FROM kits ORDER BY codkits ASC;";
			$resultado=mysqli_query($conexao, $sql);
			if (mysqli_num_rows($resultado) >0){

				while($row = mysqli_fetch_array($resultado))
				{
					if ($contador == 0) echo"<div class='row'>";
	        ?>				
					<div id='titulo' class='col-3'>
						 <div class='card' >
						   
						   <div> 
						      <!--<h1>kits:</h1>-->
				              <h1 class = "titulo_tema"><?php echo "*Kit nº".$row['codkits'] ?></h1>
							  <h2 class = "titulo_tema"><?php echo "*Bolo de corte: " .$row['bolodecorte'] ?></h2>
							  <h2 class = "titulo_tema"><?php echo "*Docinhos: " .$row['docinhos'] ?></h2>
							  <h2 class = "titulo_tema"><?php echo "*Salgadinhos: " .$row['salgadinhos'] ?></h2>
							  <h2 class = "titulo_tema"><?php echo "*Lanches: " .$row['lanches'] ?></h2>
							  <h2 class = "titulo_tema"><?php echo "*Geladinhos: " .$row['geladinhos'] ?></h2>
							  <h2 class = "titulo_tema"><?php echo "*Bebidas: " .$row['bebidas'] ?></h2>
							  <h2 class = "titulo_tema"><?php echo "*Equipe: " .$row['funcionarios'] ?></h2>
							  <h2 class = "titulo_tema"><?php echo "*Numero de pessoas: " .$row['n_pessoas'] ?></h2>
							  <!--<span> tema:</span>
							  <button>click aqui</button>-->
							  
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

