<?php
include 'conn.php';

$sql = "SELECT * FROM antaret";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Emri"] . "</td><td>" . $row["Mbiemri"] . "</td><td>" . $row["Ditelindja"] . "</td><td>" . $row["Adresa"] . "</td><td>" . $row["Emajli"] . "</td><td>" . $row["Pasi"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Keine Daten gefunden";
}

$conn->close(); 
?>