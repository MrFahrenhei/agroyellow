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
	<title>Login </title>
</head>

<body>
	<div id="corpao">
		<h2> O que você gostaria de fazer?</h2>
		<br>
		<a href="empresa.php"><button style="width: 50%;" !important>Vender</button></a>
		<br>
		<br>
		<a href="user.php"><button style="width: 50%;" !important>comprar</button></a>
		<br><br><br><br>
		<div class="container signin">
			<?php include "modal.php"; ?>
		</div>
		<br>
	</div>

</body>

</html>