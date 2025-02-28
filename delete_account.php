<?php
$Id = $_GET["id"]; 
include 'funksionet.php'; 
$conn=lidhu_me_DB();
$sql=fshi_ne_DB($conn,"antaret","ID_A",$Id);
header("Location: index.php");
exit();
$conn->close();
?>
