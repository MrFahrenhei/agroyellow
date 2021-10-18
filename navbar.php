
<link rel="stylesheet" href="styles/navbar.css">

<div id="navPrincipal" class="menuContainer fixed">
  <div id="menuMaior">
      <div class="canto">
          <a href="">Logo</a>
          <input type="text" placeholder="Procurar..">
          <a href="#home">Compras</a>
          <a href="#contact">Vender</a>
          <?php
            if ($_SESSION['nome'] == true) {
            echo'<a href="perfil.php">'.$_SESSION['nome'].'</a>';
            echo'<a style="background-color:red; border-radius:5px; !important" href="logout.php">Sair</a>';}
          ?>
      </div>
  </div>
  <div id="menuMenor">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#contact">Contato</a></li>
        <li><a href="#about">Sobre</a></li>
      </ul>
  </div>
</div>