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
<link rel="stylesheet" href="styles/payments.css">
</head>
<body>
<?php 
    include "navbar.php";

?>
<h1>Histórico de compras</h2>
</body>
</html>