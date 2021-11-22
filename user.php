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
  <link rel="shortcut icon" href="src/icon.ico" />
  <script type="text/javascript" src="index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.js"></script>
  <title>Registre-se</title>
</head>

<body>
  <form method="POST" action="php/user.controller.php">
    <div class="container">
      <h1>Registre-se</h1>
      <p>Preencha abaixo para se registrar</p>
      <hr>

      <label for="nome">NOME</label>
      <input id="nome" name="nome" type="text" placeholder="DIGITE SEU NOME..." required>

      <label for="cpf">CPF</label>
      <input type="text" name="cpf" id="cpf" placeholder="DIGITE SEU CPF..." size="18" maxlength="18" required>

      <label for="msgemail">E-MAIL:</label>
      <input type="text" name="U_email" id="msgemail" class="email" placeholder="example@example.com" required>

      <label for="telefone">TELEFONE</label>
      <input type="text" name="U_telefone" size="15" maxlength="15"id="telefone" class="telefone" placeholder="DIGITE SEU TELEFONE..." required>

      <label for="senha">SENHA</label>
      <input type="password" id="senha" class="senha" placeholder="DIGITE SUA SENHA..." name="senha" required>
      <label for="senha">CONFIRMAR SENHA</label>
      <input type="password" id="senha" class="confsenha" placeholder="CONFIRME SUA SENHA..." name="confirma_senha" oninput="validaSenha(this)" required>
      <script>
        function validaSenha(input) {
          if (input.value != document.getElementById('senha').value) {
            input.setCustomValidity('As senhas sao diferentes');
          } else {
            input.setCustomValidity('');

          }
        }
        $(document).ready(function() {
          var $seuCampoCpf = $("#cpf");
          $seuCampoCpf.mask('000.000.000-00', {
            reverse: true
          });
        });

        $("#nome").on("input", function(){
     var regexp = /[^a-zA-Z]/g;
    if(this.value.match(regexp)){
    $(this).val(this.value.replace(regexp,''));
  }
});
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