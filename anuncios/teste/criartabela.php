<?php

include("conexeção1.php");

// sql to create table
$sql = "CREATE TABLE Compra (
ID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Titulo VARCHAR(50) NOT NULL,
Descriçao VARCHAR(500) NOT NULL,
Valor REAL(20) NOT NULL,
Quantidade INT(20) NOT NULL,
Peso DOUBLE(20) NOT NULL,
Frete VARCHAR(20) NOT NULL

)";

if ($conn->query($sql) === TRUE) {
	echo "Table MyGuests created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

$conn->close();
