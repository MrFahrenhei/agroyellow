<?php

	$sql = "SELECT
		ID,
		Titulo,
		Descriçao,
		Valor,
		Quantidade,
		Peso,
		Frete
		FROM Compra";
	$result = $conn->query($sql);

?>