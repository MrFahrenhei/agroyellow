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
        <link rel="shortcut icon" href="src/icon.ico"/> 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" href="index.js" src="index.js"></script>

        <title>HOME</title>
    </head>
    <body>
      <header>
          <?php include "navbar.php"; ?>
      </header>
    <form>
        <h1>
        <?php
            if ($_SESSION['nome'] == true) {
            echo'<a href="perfil.php" style="color:red; padding:10% 0% 5% 50%;">'.$_SESSION['nome'].'</a>';
            }
          ?>
        </h1>
    </form>
    </body>
</html>