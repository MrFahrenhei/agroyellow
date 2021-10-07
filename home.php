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
        <script type="text/javascript" href="index.js" src="index.js"></script>
        <title>HOME</title>
    </head>
    </body>
        <?php include "navbar.php"; ?>
    </body>
</html>