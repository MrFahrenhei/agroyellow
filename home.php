<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['nome'])) {
    header("Location: index.php");
    exit;
  }
  
  else{
    if (!isset($_SESSION['senha'])) {
      header("Location: index.php");
      exit;
    }
  }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/test.css">
        <link rel="stylesheet" href="styles/css.css">
        <link rel="shortcut icon" href="src/icon.ico"/> 
        <script type="text/javascript" href="index.js" src="index.js"></script>
        <title>HOME</title>
    </head>
    </body>
      <header>
          <?php include "navbar.php"; ?>
      </header>
      <div class="containerGeral mt-4">
        <div class="homeLinks row mt-1 justify-content-center">
          <div class="itensHome col-home mt-3 b-none px-1">
            <a class="anuncios py-2" href="meusanuncios.php" title="Verificar o que eu já publiquei">
              <img alt="Icone dos anuncios" src="https://cdn.mfrural.com.br/Content/layout_novo/img/home_icons/anuncios_opt.png" width="75" height="45">
              <b>Anúncios</b>
            </a>
          </div>
          <div class="itensHome col-home mt-3 b-none px-1">
            <a class="publicar py-2" href="publicacoes.php" title="Gostaria de publicar algo?">
              <img alt="Icone do publicar" src="https://cdn.mfrural.com.br/Content/layout_novo/img/home_icons/publicar_opt.png" width="75" height="45">
              <b>Inserir <br> Anúncios</b>
            </a>
          </div>
          <div class="col-home mt-3">
              <a href="transportadoras.php" title="Verificar as transportadores do momento">
                <img alt="Icone de Transporte" src="https://cdn.mfrural.com.br/Content/layout_novo/img/home_icons/avaliacao-trator_opt2.png" width="75" height="45">
                Transportadora
              </a>
          </div>
        </div>
      </div>

    </body>
</html>