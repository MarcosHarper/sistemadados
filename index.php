<?php 
	require_once 'classes/usuarios.php';
	$u = new usuario;
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<style>
		body{
			background-color: #fff; 
			background-position-x: 0;
			background-position-y: 0;
			background-repeat: no-repeat;
		}


	</style>

</head>
<body>
	<img id="img" src="ima/logo.png" alt="">
	
	<div id="corpo-form">
	<h1 id="titulo1">SISTEMA DE DADOS</h1>
	<form method="post">
		<input type="email" placeholder="Email" name="email">
		<br>
		<input type="password" placeholder="Senha" name="senha">
		<br>
		<input type="submit" value="Acessar">
		<br>
	</form>
	
</div>
<?php

if(isset($_POST['email']))
{
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	if(!empty($email) && !empty($senha))
	{
		$u->conectar("login","localhost","root","");
		if($u->msgErro == "")
		{
		if($u->logar($email,$senha))
		{
			header("location: areaprivada.php");
		}
		else
		{
			?>
			<div class="msg-erro">
			Email e/ou senha estão incorretos!
			</div>
			
			<?php
		}
	}
		else
		{
			?>
			<div class="msg-erro">
			<?php echo "Erro: ".$u->msgErro; ?>
			</div>
			
			<?php
			
		}
	}else
	{
		?>
			<div class="msg-erro">
			Preencher todos os campos!
			</div>
			
			<?php
		
	}
}

?>
<footer>
	<p>&copy; 2024 - Todos os direitos reservados - Assessoria de dados</p>
	<p>Entre em contato pelo e-mail: dadossagpi@gmail.com</p>
	<nav>
		<ul>
			<li><a href="#">Termos de uso</a></li>
			<li><a href="#">Política de privacidade</a></li>
		</ul>
	</nav>
</footer>
</body>
</html>