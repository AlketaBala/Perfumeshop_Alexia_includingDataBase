<?php
$data = $_GET["emri"];
$Kodi=$_GET["Kodi"];
$shtylla = $_GET["vlera"];

include'conn.php';

$Kodi = $conn->real_escape_string($Kodi);
$data = $conn->real_escape_string($data);


$sql = "UPDATE produktet SET $shtylla='$data' WHERE Kodi='$Kodi'";


if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Gabim: " . $conn->error;
}

$conn->close();



require 'admin.php';

?>