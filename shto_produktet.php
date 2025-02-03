<?php
$Emri = $_GET["Emri"];
$Pershkrimi = $_GET["Pershkrimi"];
$Qmimi = $_GET["Qmimi"];
$Sasia = $_GET["Sasia"];

include 'conn.php';

// SQL-urrdhri qysh mej shti vlerat ne tabelen antaret (pa ID, nese ID eshte  AUTO_INCREMENT me rastin e krijimit te tabeles)
$sql = "INSERT INTO produktet (Emri, Pershkrimi, Qmimi, Sasia)
        VALUES ('$Emri', '$Pershkrimi', '$Qmimi', '$Sasia')";


if ($conn->query($sql) === TRUE) {
    echo "ne rregull vlerat u futen";
} else {
    echo "vlerat nuk u futen ne tabel: " . $conn->error;
}

// mbylle lidhjen
$conn->close();
require 'admin.php';
?>