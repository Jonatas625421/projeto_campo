<?php
session_start();

if (isset($_SESSION['autenticado'])){
  header('location: lista_horas.php');

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Tela de login</title>
	<script src="js/login.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
	<body>
		<form id="form" method="post" action="login_validate.php">
			<div id="login">
			    <span>Login</span>
				
				
					<input type="text" name="email" placeholder="Informe seu login">
				
				
					<input type="password" name="password" placeholder="Digite a sua senha">
				
				
					<button onclick="validate_login()">ENTRAR</button> 
				
				<div class="links">
					<a href="#"><small>Esqueci minha senha</small></a>
					<a href="#"><small>Crie uma conta</small></a>
				</div>	
		    </div>
	    </form>
	</body>
</html>
