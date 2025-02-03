<?php
$Id = $_GET["ID"];

include 'conn.php';

// SQL-urrdhri qysh mej shti vlerat ne tabelen antaret (pa ID, nese ID eshte  AUTO_INCREMENT me rastin e krijimit te tabeles)
$sql = "DELETE FROM antaret WHERE ID = '$Id';";


if ($conn->query($sql) === TRUE) {
   
} else {
    echo "vlerat nuk u futen ne tabel: " . $conn->error;
}

// mbylle lidhjen
$conn->close();
require 'admin.php';
?>