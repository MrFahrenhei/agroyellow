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
</head>
<body>
<?php 
    include "navbar.php";

?>
<h1>Blog</h2>
</body>
</html>