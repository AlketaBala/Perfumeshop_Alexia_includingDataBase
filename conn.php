<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "alka";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

?>