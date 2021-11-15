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
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/test.css">
        <link rel="stylesheet" href="styles/css.css">
        <link rel="stylesheet" href="styles/perfil.css">
        <link rel="shortcut icon" href="src/icon.ico"/> 
        <script type="text/javascript" href="index.js" src="index.js"></script>

        <title>Perfil</title>
    </head>
    <body>
    <div class="container">
      <header>
          <?php include "navbar.php"; ?>
          <i class="fa fa-bars" aria-hidden="true"></i>
      </header>
    <main>
      <div class="row">

        <div class="left">
          <div class="photo-left">
            <img class="photo" src="https://yt3.ggpht.com/ytc/AKedOLQiqn6FdeCgAdYXD8NcSLnNedggPHLniR8djQaCow=s88-c-k-c0x00ffffff-no-rj" alt="Ainda tem nada aki filhão">
          </div>

        <?php
        $novoemail = $_SESSION['E_email'];
        //echo '<p class="info">'.$row['email'].'</p>'; 
         if ($_SESSION['nome'] == true) {
            echo '<h4 class="name">'.$_SESSION['nome'].'</h1>';
            echo '<p class="info">Capeão profissional</p>'; 
            echo '<p class="info">Empresa</p>';  
            echo '<p class="info">'. $novoemail.'</p>'; 
         }
             ?>

        
       

        <div class="stats row">
            <div class="stat col-xs-4" >
              <p class="number-stat">12</p>
              <p class="desc-stat">Seguidores</p>
            </div>
            <div class="stat col-xs-4">
              <p class="number-stat">1</p>
              <p class="desc-stat">Seguindo</p>
            </div>
            <div class="stat col-xs-4">
              <p class="number-stat">1</p>
              <p class="desc-stat">Publicações</p>
            </div>
        </div>

        <p class="desc">Eu gosto delas grandes, eu gosto delas robustas<br>
Eu gosto delas grandes, eu gosto delas fofinhas<br>
Eu gosto delas por perto, com algo a mais<br>
Elas gostam do meu som, elas acham que eu sou malcheiroso</p>
        <div class="social">
          <i class="fa fa-facebook-square" aria-hidden="true"></i>
          <i class="fa fa-twitter-square" aria-hidden="true"></i>
          <i class="fa fa-pinterest-square" aria-hidden="true"></i>
          <i class="fa fa-tumblr-square" aria-hidden="true"></i>
        </div>

      </div>

      <div class="right">
        <ul class="nav">
          <li>Vendas</li>
          <li>Compras</li>
          <li>Configurações</li>
          <li>Sobre</li>
        </ul>    
      </div>

    </main>
    </div>
    </body>
</html>