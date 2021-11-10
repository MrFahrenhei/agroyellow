<?php

include("conexeção1.php");

$sql = "INSERT INTO Compra (Produto, Quantidade, Preço)
VALUES ('Suino', 100, 1000.00)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>