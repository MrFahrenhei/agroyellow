<!DOCTYPE html>
<html>
<body>

<?php

include("conexeção1.php");

$sql = "SELECT ID, Titulo, Descriçao, Valor, Quantidade, Peso, Frete FROM Compra";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo
		"<br>
		ID: ". $row["ID"]."
		- Titulo: ". $row["Titulo"]."
		- Descriçao: ". $row["Descriçao"]."
		- Valor: ". $row["Valor"]."
		- Quantidade: ". $row["Quantidade"]."
		- Peso: ". $row["Peso"]."
		- Frete: ". $row["Frete"].
		"<br>";
	}
} else {
	echo "0 results";
}

$conn->close();
?>

</body>
</html>