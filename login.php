<?php
session_start();

if (isset($_SESSION['autenticado'])){
  header('location: lista_horas.php');

}

$login = '';
$error_message = '';
if (isset($_GET['login'])){
	$login = 'data-login="'. $_GET['login'].'"';
	$error_message = '<span style="color:red;">Usuário e/ou senha incorreto(s)</span>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Tela de login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="js/login.js"></script>
	
</head>
	<body>
		<form id="form-login" method="post" action="login_validate.php" <?php echo $login;?>>
			<div id="login">
				<?php echo $error_message;?>
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
<script type="text/javascript">
	function show_login_message(){
		var form = document.getElementById('form-login');

		if (form.dataset.login === 'false') {

          alert('Usuário e/ou senha incorreto(s)');
		}

	}
	show_login_message();
</script>
	