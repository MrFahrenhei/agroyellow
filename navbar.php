
<link rel="stylesheet" href="styles/navbar.css">

<div id="navPrincipal" class="menuContainer fixed">
  <div id="menuMaior">
      <a href="">Logo</a>
      <div id="pesqusia">Pesquisa</div>
      <div class="canto">
          <a href="#home">Compras</a>
          <a href="#contact">Vender</a>
          <?php
            if ($_SESSION['nome'] == true) {
            echo'<a style=" !important"  href="perfil.php">'.$_SESSION['nome'].'</a>';
            echo '<a style="float:right; border: none;!important" href="logout.php">Sair</a>';}
          ?>
      </div>
  </div>
  <div id="menuMenor">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#contact">test</a></li>
        <li><a href="#contact">Contato</a></li>
        <li><a href="#about">Sobre</a></li>
        </ul>
  </div>
</div>