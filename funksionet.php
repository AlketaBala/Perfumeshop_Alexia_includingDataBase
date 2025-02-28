<?php
/*-----------------------------FUNKSIONI PER LIDHJE ME DB------------------------------*/ 
function lidhu_me_DB() {
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "alka";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
return $conn;
}
/*-----------------------------FUNKSIONI PER TE SHTUAR NE DB------------------------------*/ 
function shto_ne_DB($conn,$tabela,$data) {
    $sq = "INSERT INTO " . $tabela . " (" . implode(", ", array_keys($data)) . ") VALUES ('" . implode("', '", array_values($data)) . "')";
    if ($conn->query($sq) === TRUE) {
       
    } else {
        echo "Gabim në shtimin e të dhënave në tabelën " . $tabela . ": " . $conn->error . "<br>";
    }
    return $sq;
}
/*-----------------------------FUNKSIONI PER FSHIRJE NE DB------------------------------*/ 
function fshi_ne_DB($conn,$tabela,$data1,$data2) {
    $sql = "DELETE FROM $tabela WHERE $data1 = $data2";
    
    if ($conn->query($sql) === TRUE) {  
    } else {
        echo "vlerat nuk u futen ne tabel: " . $conn->error;
    }
    return $sql;
}
/*-----------------------------FUNKSIONI PER TE EDITUAR NE DB------------------------------*/ 
function edit_ne_DB($conn,$tabela,$shtylla,$data,$ID_A,$Id) {
    $sql = "UPDATE $tabela SET $shtylla='$data' WHERE $ID_A='$Id'";
    if ($conn->query($sql) === TRUE) {  
    } else {
        echo "Gabim: " . $conn->error;
    }
}
/*-----------------------------FUNKSIONI PER TE LEXUAR NE DB------------------------------*/ 
function lexo_ne_DB ($conn,$tabela){
    $sql = "SELECT * FROM $tabela";
    $result = $conn->query($sql);
    return $result;
}
/*-----------------------------FUNKSIONI PER TE SHFAQUR NJE STRING------------------------------*/ 
function shkruaj($string){
echo $string;
}
?>