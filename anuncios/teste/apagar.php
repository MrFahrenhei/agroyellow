<?php

include("conexeção1.php");


$sql = "DELETE FROM Compra WHERE id=8";

if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>