<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Tela de login</title>
	<script src="js/login.js"></script>
</head>
<body>
	<p>Login</p>
	<form id="form" method="post" action="login_validate.php">
		<input type="text" name="email" placeholder="Informe seu login"><br><br>
		<input type="password" name="password" placeholder="Digite a sua senha"><br><br>
		<input type="button" onclick="validate_login()" value="ENTRAR"><br><br>
		<small>Não é registrado?</small><a href="#">Crie uma conta</a>
	</form>
</body>
</html>