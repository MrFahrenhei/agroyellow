<?php

include("conexeção1.php");

$sql = "INSERT INTO Compra (
	Titulo,
	Descriçao,
	Valor,
	Quantidade,
	Peso,
	Frete
)
VALUES (
	'Teste',
	'Teste',
	'100',
	'100',
	'100',
	'100'
)";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>