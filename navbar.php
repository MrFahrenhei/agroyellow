<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="styles/navbar.css">

<div id="navPrincipal" class="menuContainer fixed">
  <nav id="menuMaior">
      <div class="canto">
          <img src="src/LogoAgroYellow.png"></img>
          <input type="text" placeholder="Procurar..">
          <a href="#home">Blog</a>
          <?php
            if ($_SESSION['nome'] == true) {
            echo'
            <a href="perfil.php" style="
              display: inline-block;
              width: 10em;
              overflow: hidden;
              white-space: nowrap;
              text-overflow: ellipsis;
            ">'.$_SESSION['nome'].'</a>';
            echo'<a href="#contact">Carrinho</a>';
            echo'<a style="background-color:red; border-radius:  5px 0px; margin-right:1%; !important" href="logout.php">Sair</a>';}
          ?>
      </div>
      <p style="padding: 0% 0% 0% 5%; margin:0%; font-size:12px;"><spam style="color:yellow;"></spam> </p>
  </nav>
  <nav id="menuMenor">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="#contact">Contato</a></li>
        <li><a href="#about">Sobre</a></li>
      </ul>
  </nav>
</div>