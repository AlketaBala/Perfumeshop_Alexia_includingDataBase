<?php
include 'conn.php';

if (isset($_GET['ida'])) {
    $userId = $_GET['ida'];
    $total = 0;
  
    /**<---------------------Ndihmon me kthy prape ne index si i kyqur-------------------------> */  
    $sqlUser = "SELECT Emri FROM antaret WHERE ID_A = $userId";
    $result = $conn->query($sqlUser);
    $row = $result->fetch_assoc();
    
    if ($row) {
        $EMRI = $row['Emri'];
    } else {
        $EMRI = ""; 
    }
    /**<----------------------------------------------> */  
    
    
    
    $sql = "SELECT * FROM wk INNER JOIN produktet ON wk.idprodukti = produktet.Kodi WHERE idantari = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Krijo nji porosi te re ne databaze
        $sqlInsert = "INSERT INTO porosite (idantari, data, totali) VALUES ($userId, NOW(), 0)";
        if ($conn->query($sqlInsert) === TRUE) {
            $orderId = $conn->insert_id; // Merr ID-në e porosise se krijuar

            // Ktu me shtu produktet e shportës në porosi
            while ($row = $result->fetch_assoc()) {
                $productId = $row['idprodukti'];
                $sasia = $row['Sasiaeporosis'];
                $qmimi = $row['Qmimi'];
                $total += $qmimi * $sasia;

                // Ruaj produktin e porositur në databazë
                $sqlOrderDetails = "INSERT INTO porosi_detaje (idporosia, idprodukti, sasia, qmimi) 
                                    VALUES ($orderId, $productId, $sasia, $qmimi)";
                $conn->query($sqlOrderDetails);
            }

            // Përditësojmë shumën totale të porosisë
            $conn->query("UPDATE porosite SET totali = $total WHERE id = $orderId");

            // Fshijmë shportën pas porosisë
            $conn->query("DELETE FROM wk WHERE idantari = $userId");

            echo "<br>Porosia u krye me sukses!";
            header("Location: index.php?emri=" . urlencode($EMRI) . "&id=" . urlencode($userId));
            exit();
        } else {
            echo "<br>Gabim në krijimin e porosisë!";
        }
    } else {
        echo "<br>Shporta është bosh!";
    }
} else {
    echo "<br>Parametrat nuk janë të sakta.";
}
?>
