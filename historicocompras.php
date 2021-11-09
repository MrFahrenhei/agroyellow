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

<link rel="stylesheet" href="styles/payments.css">

<?php 
    include "navbar.php";

?>
    
