<?php
$data = $_GET["emri"];
$Id=$_GET["id"];
$shtylla = $_GET["vlera"];


include 'conn.php';

$Id = $conn->real_escape_string($Id);
$data = $conn->real_escape_string($data);


$sql = "UPDATE antaret SET $shtylla='$data' WHERE ID='$Id'";


if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Gabim: " . $conn->error;
}

$conn->close();

require 'admin.php';
?>
