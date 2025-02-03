<?php
$Kodi = $_GET["Kodi"];

include 'conn.php';

// SQL-urrdhri qysh mej shti vlerat ne tabelen antaret (pa ID, nese ID eshte  AUTO_INCREMENT me rastin e krijimit te tabeles)
$sql = "DELETE FROM produktet WHERE Kodi = '$Kodi';";


if ($conn->query($sql) === TRUE) {
   
} else {
    echo "vlerat nuk u futen ne tabel: " . $conn->error;
}

// mbylle lidhjen
$conn->close();
require 'admin.php';
?>