<link rel="stylesheet" href="styles/modaltermos.css">

<div>

<input type="checkbox" id="scales" name="scales" value="on">

</div>
<p>Por estar criando uma conta, você concorda com os nossos <a  onclick="document.getElementById('modalterms').style.display='block'"   style="width:auto;"> Termos & Privacidades</a> </p>


    

<div id="modalterms" class="modalterms">
    <form class="modal-content animate2" action="/action_page.php" method="post">
        <div class="modal-contents">
            <span class="closer">&times;</span>
            <?php  include "Terms.php" ;?> 
           <center> <button onclick="document.getElementById('modalterms').style.display='none'"  class="termos">Li e Concordo com os Termos</button> </center>
        </div>
        <br>
    </form>
</div>

<script>
  let modalterms = document.getElementById("modalterms");


  window.onclick = function(event) {
    if (event.target == modalterms) {
      modalterms.style.display = "none";
    }
  }
</script>


