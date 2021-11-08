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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" href="index.js" src="index.js"></script>

        <title>HOME</title>
    </head>
    <body>
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
              <span class="material-icons md-70">&#xe558;</span>
                <b>Transportadora</b>
              </a>
          </div>

          <div class="col-home mt-3 b-m-none">
              <a href="pagamento.php" title="Pagamentos">
              <span class="material-icons md-70">&#xef63;</span>     
                  <b>Pagamentos</b>
              </a>
          </div>

          <div class="row-home visible-mobile"></div>

          <div class="col-home b-left">
              <a href="historicoCompras.php" title="Histórico de Compras">
              <span class="material-icons md-70">&#xe889;</span>    
                  <b>Histórico<br>de<br>Compras</b>
              </a>
          </div>

          <div class="col-home">
              <a href="chatModal.php" title="Chat">
              <span class="material-icons md-70">&#xe0b7;</span>    
                  <b>Chat</b>
              </a>
          </div>

          <div class="col-home">
          <a href="chatModal.php" title="Configuração">   
              <span class="material-icons md-70">&#xe8b8;</span>
              <b>Configuração</b>
              </a>
          </div>

          <div class="col-home b-m-none">
          <a href="TermosHome.php" title="termos">
            <span class="material-icons md-70">&#xef42;</span>     
                  <b>Termos<br>de<br>Uso</b>
                  
              </a>
          </div>

          <div class="col-home">
          <a href="DicasSeg.php" title="dicas">
            <span class="material-icons md-70">&#xe32a;</span>     
                  <b>Dicas<br>de<br>Segurança</b>
                  
              </a>
          </div>

          <div class="col-home ">
          <a href="DicasSeg.php" title="avalie">
            <span class="material-icons md-70">&#xe8dc;</span>     
                  <b>Avalie<br>nosso<br>conteúdo</b>
                  
              </a>
          </div>

          <div class="col-home b-m-none">
          <a href="DicasSeg.php" title="Sobre">
            <span class="material-icons md-70">&#xe887;</span>     
                  <b>Sobre</b>
                  
              </a>
          </div>
          
        </div>
      </div>

    </body>
</html>