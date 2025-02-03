<?php
include 'conn.php';

$sql = "SELECT * FROM produktet";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Kodi"] . "</td><td>" . $row["Emri"] . "</td><td>" . $row["Pershkrimi"] . "</td><td>" . $row["Qmimi"] . "</td><td>" . $row["Sasia"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Keine Daten gefunden";
}

$conn->close(); 
?>