
<link rel="stylesheet" href="styles/modal.css">

<p>já tem cadastro? fazer <a onclick="document.getElementById('modal').style.display='block'" style="width:auto;">Login</a></p>
    
<form method="POST" action="php/valida.controller.php">
<div id="modal" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="container-modal">
            <label><b>Nome</b></label>
            <input type="text" placeholder="Insira seu nome de usuário" name="nome" required>
            <label><b>Senha</b></label>
            <input type="password" placeholder="Insira sua senha" name="senha" required>
            <button type="submit">Login</button>
        </div>
        <div class="container-modal" style="background-color:#f1f1f1">
<button onclick="document.getElementById('modal').style.display='none'" class="cancelbtn">Cancelar</button>
        </div>
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
