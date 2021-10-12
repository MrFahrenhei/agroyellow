<link rel="stylesheet" href="styles/modaltermos.css">
<p>Por estar criando uma conta, você concorda com os nossos <a  id="botaoTermos">Termos & Privacidades</a>  </p>

<!-- The Modal -->
<div id="modalTermos" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
      <p>  &emsp; Some text in the Modal DASUDHASUJDHASUKDAHSDAKJSDHASJDKASHDASKJDSAHD 
      SAHahdhsajidaskdasjdhjsadkashjkdas  
      </p>
  </div>

</div>

<script>
    var modal1 = document.getElementById("modalTermos");
    var btn1 = document.getElementById("botaoTermos");
    var span1 = document.getElementsByClassName("close")[0];
      btn1.onclick = function() {
        modal1.style.display = "block";
      }
      span1.onclick = function() {
        modal1.style.display = "none";
      }
    window.onclick = function(event) {
      if (event.target == modal1) {
        modal1.style.display = "none";
      }
}
</script>

