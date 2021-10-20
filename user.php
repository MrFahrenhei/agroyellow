<?php
session_start();

//$cx = mysqli_connect("localhost", "root", "");
//$db = mysqli_select_db($cx, "user");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/test.css">
    <link rel="shortcut icon" href="src/icon.ico"/> 
    <script type="text/javascript" src="index.js"></script>
    <title>Registre-se</title>
</head>
<body>
  <form method="POST" action="php/user.controller.php">
      <div class="container">
        <h1>Registre-se</h1>
        <p>Preencha abaixo para se registrar</p>
      <hr>
  
      <label for="nome">Nome</label>
      <input  id="nome" name="nome" type="text" placeholder="Digite seu nome" required>
      
      <label for="cpf">CPF</label>
      <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" required>
        
      <label for="msgemail">E-mail:</label>
      <input type="text" name="U_email" id="msgemail"  placeholder="example@example.com" required>      

      <label for="telefone">Telefone</label>
      <input type="text" name="U_telefone" id="telefone" placeholder="Digite seu telefone" required>
      
      <label for="senha">Senha</label>
      <input type="password" id="senha" placeholder="Digite sua senha" name="senha"required>
      <label for="password">Confirmar senha </label>
      <input type="senha" id="senha" placeholder="Confirme sua senha" name="confirma_senha" oninput="validaSenha(this)" required>
      <script>
		    		function validaSenha (input){
		    			if (input.value != document.getElementById('senha').value){
		    				input.setCustomValidity('As senhas sao diferentes');
		    			}else{
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
    <?php include "modal.php" ;?> 
  </div>
</body>
</html>