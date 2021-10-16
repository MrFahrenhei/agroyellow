<?php
session_start();

$cx = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($cx, "conexao");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="src/icon.ico" />
	<link rel="stylesheet" href="styles/test.css">
	<script type="text/javascript" href="index.js" src="index.js"></script>
	<title>Registrar sua Empresa</title>
</head>

<body>
	<form method="POST" action="php/empresa.controller.php">
		<div class="container">
			<h1>Registre sua Empresa</h1>
			<p>Preencha abaixo para registrar sua empresa</p>
			<hr>

			<label for="nome">Nome da Empresa</label>
			<input id="nome" name="nome" type="text" placeholder="Digite seu nome" required>

			<label for="cnpj">CNPJ</label>
			<input type="text" name="cnpj" id="cnpj" onkeyup="FormataCnpj(this,event)" ng-model="cadastro.cnpj" placeholder="Digite seu CNPJ" required>

			<label for="email">E-mail:</label>
			<input type="text" name="E_email" id="msgemail" placeholder="example@example.com" required>

			<label for="phone">Telefone</label>
			<input type="text" name="E_telefone" id="telefone" placeholder="Digite seu telefone" required>

			<label for="password">Senha</label>
			<input type="password" id="E_senha" placeholder="Digite sua senha" name="senha" required>
			<label for="password">Confirmar senha </label>
			<input type="password" id="E_senha" placeholder="Confirme sua senha" name="confirma_senha" oninput="validaSenha(this)" required>
			<script>
				function validaSenha(input) {
					if (input.value != document.getElementById('senha').value) {
						input.setCustomValidity('As senhas sao diferentes');
					} else {
						input.setCustomValidity('');
					}
				}
			</script>
			<?php include "modalterms.php"; ?>
			<hr>
			<button type="submit" class="registerbtn">Registrar</button>
		</div>
	</form>
	<div class="container signin">
		
		<?php include "modal.php"; ?>
		
	</div>
</body>

</html>