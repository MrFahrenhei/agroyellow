<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Modal.css">
</head>
<body>


<p>Por estar criando uma conta, você concorda com os nossos 
    
<a  id="myBtn">Termos & Privacidades</a>  </p>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <table>
    <p>  &emsp; Some text in the Modal DASUDHASUJDHASUKDAHSDAKJSDHASJDKASHDASKJDSAHD 
    SAHahdhsajidaskdasjdhjsadkashjkdas  
    </p>
    </table>
  </div>

</div>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
