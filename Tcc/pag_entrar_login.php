<!DOCTYPE html>
<html lang="pt-br">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="pag_entrar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pag_entrar.css">
    <title>pagina de login do usuário</title>
</head>
  
<body>
     
       <div class="main-login">
        <div class="left-login">
	       <h1> faça seu login!</h1>
	       <img src="login tcc.svg" class="imagem" alt="fotologin">
	   </div>
	   
	  <div class="right-login">
	      <div class="card-login">
		  <h1>login:</h1>
		  <form action="pag_entrar.php" method="post">
		    <div class="textfield" action="pag_entrar.php" method="post">
			    <label for="email">email:</label>
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="digite seu email" name="email" value="">
			</div>
			<div class="textfield" action="pag_entrar.php" method="post">
			    <label for="senha">senha:</label>
				 <i class="fa fa-lock" aria-hidden="true"></i>
				<input type="text" placeholder="digite sua senha" name="senha" value="">
			</div>
	         <input class="button" type="submit" value="logar">
			<?php if( isset($_GET['codigo']) ){ ?>
			 <div class="visible">Email ou senha inválidos*</div>
             <div class="invisible">...</div>
			<?php }?>
			 </form>
           </div>	  
      </div>
</div>
  
</body>
  
</html>



   <!--<form action="pag_entrar.php" method="post"
        <div class="login-box">
            <h1>Faça seu login:</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="email"
                         name="email" value="">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="senha" placeholder="Senha"
                         name="senha" value="">
            </div>
  
            <input class="button" type="submit"
                     name="login" value="Entrar">
        </div>
    </form>-->
	