<?php
include 'conn.php';
$Emri = $_GET["Emri"];
$Mbiemri = $_GET["Mbiemri"];
$Ditelindja = $_GET["Ditelindja"];
$Adresa = $_GET["Adresa"];
$Emajli = $_GET["Emajli"];
$Pasi = $_GET["Pasi"];
  

 $sql = "INSERT INTO antaret (Emri, Mbiemri, Ditelindja, Adresa, Emajli, Pasi)
        VALUES ('$Emri', '$Mbiemri', '$Ditelindja', '$Adresa', '$Emajli', '$Pasi')";


if ($conn->query($sql) === TRUE) {
   
} else {
    echo "vlerat nuk u futen ne tabel: " . $conn->error;
}
 
 $conn->close();
 require 'loginform.php'; 
 
 ?>