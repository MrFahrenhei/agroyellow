<?php
session_start();

$cx = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($cx, "conexao");
$db = mysqli_select_db($cx, "conexao");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="src/icon.ico" />
	<link rel="stylesheet" href="styles/reset.css">
	<link rel="stylesheet" href="styles/css.css">
	<script type="text/javascript" src="index.js"></script>

	<title>Login</title>
</head>

<body>
	 
	
	
	<div class="background"> 
		<img class="SUINO" src="src/suino.jpg" alt="">
	</div>
	<img class="logo"src="src/ícone.png" >
	<div id="corpao">
		
		<h2> O que você gostaria de fazer?</h2>
		<br>
		<a href="empresa.php"><button style="width: 50%;">Vender</button></a>
		<br>
		<br>
		<a href="user.php"><button style="width: 50%;" >Comprar</button></a>
		<br><br><br><br>
		<div class="container signin">
			<?php include "modal.php"; ?>
		</div>
		<br>
	</div>
	<h2 class="frase">‘‘SEMPRE EM BUSCA DE NOVAS TECNOLOGIAS PARA O CAMPO’’</h2>
</body>

</html>