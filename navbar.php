
<link rel="stylesheet" href="styles/navbar.css">

<ul>
  <li><img src="src/logo.png"></li>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Geral</a></li>
  <li><a href="#contact">Contato</a></li>
  <li><a href="#about">Sobre</a></li>

  <?php
    if ($_SESSION['nome'] == true) {
        echo '<li  style="background-color: blue; !important"><a href="perfil.php"> Seu Perfil : '.$_SESSION['nome'].'</a></li>';
        echo '<li style="float:right; background-color: red; !important"><a href="logout.php">Sair</a></li>
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