<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style.css" />
</head>

<body>

	<?php

	include("conexeção1.php");

	$sql = "SELECT ID, Titulo, Descriçao, Valor, Quantidade, Peso, Frete FROM Compra";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo
			"<table>
				<tr>
					<td>
						ID: " . $row["ID"] . "
					</td>
					<td>
						Titulo: " . $row["Titulo"] . "
					</td>
					<td>
						Descriçao: " . $row["Descriçao"] . "
					</td>
					<td>
						Valor: " . $row["Valor"] . "
					</td>
					<td>
						Quantidade: " . $row["Quantidade"] . "
					</td>
					<td>
						Peso: " . $row["Peso"] . "
					</td>
					<td>
						Frete: " . $row["Frete"] . "
					</td>
				</tr>
			</table>";

		}
	} else {
		echo "0 results";
	}

	$conn->close();
	?>

</body>

</html>