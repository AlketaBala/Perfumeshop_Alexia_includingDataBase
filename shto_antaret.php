<?php
$Emri = $_GET["Emri"];
$Mbiemri = $_GET["Mbiemri"];
$Ditelindja = $_GET["Ditelindja"];
$Adresa = $_GET["Adresa"];
$Emajli = $_GET["Emajli"];
$Pasi = $_GET["Pasi"];

include 'conn.php';

// SQL-urrdhri qysh mej shti vlerat ne tabelen antaret (pa ID, nese ID eshte  AUTO_INCREMENT me rastin e krijimit te tabeles)
$sql = "INSERT INTO antaret (Emri, Mbiemri, Ditelindja, Adresa, Emajli, Pasi)
        VALUES ('$Emri', '$Mbiemri', '$Ditelindja', '$Adresa', '$Emajli', '$Pasi')";


if ($conn->query($sql) === TRUE) {
    
} else {
    echo "vlerat nuk u futen ne tabel: " . $conn->error;
}

// mbylle lidhjen
$conn->close();
require 'admin.php';
?>