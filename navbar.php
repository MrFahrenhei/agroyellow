
<link rel="stylesheet" href="styles/navbar.css">
<ul style="padding:5% 0% 2% 45%; !important">
  <?php  if ($_SESSION['nome'] == true){
      echo '<li style="background-color: blue;border-radius: 10px; !important"><a href="perfil.php">'.$_SESSION['nome'].'</a></li>';
   }?>
</ul>
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#contact">test</a></li>
  <li><a href="#contact">Contato</a></li>
  <li><a href="#about">Sobre</a></li>

  <?php
    if ($_SESSION['nome'] == true) {
        echo '<li style="float:right; border: none;!important"><a href="logout.php">Sair</a></li>
        ';
    }
    ?>
    <?php
          if (isset($_SESSION['user'])) {
            echo ' 
            <li><a>Painel Usuário</a></li>
            ' ;   
          }     ?> 
</ul>