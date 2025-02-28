<?php

include 'funksionet.php'; 
$conn=lidhu_me_DB();

if (isset($_GET['delete']) && $_GET['delete'] == 1 && isset($_GET['ida'])) {
  $userId = $_GET['ida'];

  $sqlUser = "SELECT Emri FROM antaret WHERE ID_A = $userId";
  $result = $conn->query($sqlUser);
  $row = $result->fetch_assoc();
  
  if ($row) {
      $EMRI = $row['Emri'];
  } else {
      $EMRI = ""; 
  }

  $sql="DELETE FROM wk WHERE idantari=$userId";
  if ($conn->query($sql)=== TRUE) {
      echo "<br>Shporta u fshi me sukses.";
  } else {
      echo "<br>Shporta nuk ekziston.";
  }


  header("Location: index.php?emri=" . urlencode($EMRI) . "&id=" . urlencode($userId));
    exit(); 
} else {
    echo "<br>Parametrat nuk janë të sakta.";
}
?>