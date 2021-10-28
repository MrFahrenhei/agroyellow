
<link rel="stylesheet" href="styles/modal.css">

<p>Já tem cadastro? Fazer <a onclick="document.getElementById('modal').style.display='block'" style="width:auto;">Login</a></p>
    
<form method="POST" action="php/valida.controller.php">
<div id="modal" class="modal">
    <form class="modal-content" action="/action_page.php" method="post">
        <div class="container-modal">
            <label for="nameUser"><b>Nome</b></label>
            <input type="text" id="nameUser" placeholder="Insira seu nome de usuário" name="nome" required>
            <br><br>
            <label for="pswUser"><b>Senha</b></label>
            <input type="password" id="pswUser" placeholder="Insira sua senha" name="senha" required>
            <br><br>
            <button type="submit">Login</button><br><br>
            <input type="button" onclick="document.getElementById('modal').style.display='none'" class="cancelbtn" value="Cancelar">
        </div>
        <br>
    </form>
</div>
</form>

<script>
    var modal = document.getElementById('modal');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} //fecha o modal box quando clica fora
</script>
