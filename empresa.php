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
			<label for="nome">NOME DA EMPRESA</label>
			<input id="nome" name="nome" type="text" placeholder="DIGITE SEU NOME..." required>

			<label for="cnpj">CNPJ</label>
			<input type="text" name="cnpj" id="cnpj" onkeyup="FormataCnpj(this,event)" ng-model="cadastro.cnpj" placeholder="DIGITE SEU CNPJ..." required>

			<label for="msgemail">E-MAIL:</label>
			<input type="email" name="E_email" id="msgemail" class="email" placeholder="exemplo@dominio.com" required>

			<label for="telefone">TELEFONE</label>
			<input type="tel" name="E_telefone" id="telefone" class="telefone"  placeholder="DIGITE SEU TELEFONE..." required>

			<label for="E_senha">SENHA</label>
			<input type="password" class="senha" id="E_senha" placeholder="DIGITE SUA SENHA..." name="senha" required>
			<label for="E_senha">CONFIRMAR SENHA </label>
			<input type="password" id="E_senha" class="confsenha" placeholder="CONFIRME SUA SENHA..." name="confirma_senha" oninput="validaSenha(this)" required>
	
			<script>
				function validaSenha(input) {
					if (input.value != document.getElementById('E_senha').value) {
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