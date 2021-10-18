<link rel="stylesheet" href="styles/modaltermos.css">

<div class="bane"> 
<div>
<p> 
	<input type="checkbox" id="scales" name="scales" required>
  Por estar criando uma conta, você concorda com os nossos <a onclick="document.getElementById('modalterms').style.display='block'" style="width:auto;"> Termos & Privacidades</a> </p>
</div>
<div id="modalterms" class="modalterms">
	<div class="modal-contents">
		<span class="closer">&times;</span>
		<?php include "Terms.php"; ?>
		<span type="submit" class="submit" id="btn">Li e Concordo com os Termos</span> 
	</div>
	<br>
</div>
</div>

<script>

 var span = document.getElementsByClassName('closer')[0];
 var scales = document.getElementById('scales');
	window.onclick = function(event) {
		if (event.target == modalterms) {
			modalterms.style.display = "none";
		}
	}
  span.onclick = function() {
  modalterms.style.display = "none";
  }
  btn.onclick = function() {
    modalterms.style.display = "none";
    console.log("teste");
	console.log(scales.checked);
	scales.checked = true;
}



 
  
</script>