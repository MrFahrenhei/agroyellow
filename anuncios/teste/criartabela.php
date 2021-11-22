<?php

include("conexeção1.php");

$sql = "CREATE TABLE Compra (
ID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Titulo VARCHAR(50) NOT NULL,
Descriçao VARCHAR(500) NOT NULL,
Valor VARCHAR(50) NOT NULL,
Quantidade INT(50) NOT NULL,
Peso VARCHAR(50) NOT NULL,
Frete VARCHAR(50) NOT NULL

)";

if ($conn->query($sql) === TRUE) {
	echo "Table Compra created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

$conn->close();
