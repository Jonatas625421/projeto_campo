<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Tela de login</title>
	
</head>
<body>


<p>LOGIN</p>
<form id="form" method="post" action="login_validate.php">
<input type="text" name="email" placeholder="Informe seu login"><br><br>
<input type="password" name="password" placeholder="Digite a sua senha"><br><br>
<input type="button" onclick="validate_login()" value="ENTRAR"><br><br>
<small>Não é registrado?</small><a href="">Crie uma conta</a>
</form>
</body>
</html>

<script>
		
	function validate_login(){ 

		var form = document.getElementById("form");
		var email = document.getElementsByName("email")[0];
		var password = document.getElementsByName("password")[0];

		if(email.value == '' || password.value == ''){  
			alert("Complete os campos");
			return;  
		}
		 
        form.submit();		
	}

</script>