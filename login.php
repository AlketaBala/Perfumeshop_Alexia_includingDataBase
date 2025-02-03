<?php 
$identiteti = $_GET["emri"]; 
$pasi = $_GET["pasi"]; 

if($identiteti==="Alketa@gmail.com" && $pasi==="123")
{ 
require('admin.php');
}
else { 

 /**--------------------------------------------------------------------------------------------- */
include 'conn.php';

$sql = "SELECT * FROM antaret";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID_A"] . "</td><td>" . $row["Emri"] . "</td><td>" . $row["Mbiemri"] . "</td><td>" . $row["Ditelindja"] . "</td><td>" . $row["Adresa"] . "</td><td>" . $row["Emajli"] . "</td><td>" . $row["Pasi"] . "</td></tr>";
        
        if (isset($row["Emajli"], $row["Pasi"]) && $identiteti == $row["Emajli"] && $pasi == $row["Pasi"]) {

            header('Location:index.php?emri='.$row["Emri"] .'&id='. $row["ID_A"]);
            break;
         }   

    }
    echo "</table>";
} else {
    echo "Keine Daten gefunden";
}
$conn->close();  
}

?>