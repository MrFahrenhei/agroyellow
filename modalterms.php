<link rel="stylesheet" href="styles/modaltermos.css">

<div>

	<input type="checkbox" id="scales" name="scales" value="on">

</div>
<p>Por estar criando uma conta, você concorda com os nossos <a onclick="document.getElementById('modalterms').style.display='block'" style="width:auto;"> Termos & Privacidades</a> </p>


<div id="modalterms" class="modalterms">
	<div class="modal-contents">
		<span class="closer">&times;</span>
		<?php include "Terms.php"; ?>
		<button onclick="document.getElementById('modalterms').style.display='none'">Li e Concordo com os Termos</button>
	</div>
	<br>
</div>
<script>
	document.getElementById('modalterms').onclick = function() {
		myFunction()
	};
	var scales = document.getElementById('scales');

	function myFunction() {
		console.log("teste");
		console.log(scales.checked);
		scales.checked = true;
	}

	window.onclick = function(event) {
		if (event.target == modalterms) {
			modalterms.style.display = "none";

		}

	}
</script>