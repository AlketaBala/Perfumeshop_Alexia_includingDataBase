<?php
include_once 'funksionet.php'; 
/*-----------------------------Editimi i antareve ne ADMIN------------------------------*/ 
if (isset($_GET["id"]))
{
$data = $_GET["emri"];
$Id=$_GET["id"];
$shtylla = $_GET["vlera"];
$conn=lidhu_me_DB();
$Id = $conn->real_escape_string($Id);
$data = $conn->real_escape_string($data);
edit_ne_DB($conn,"antaret",$shtylla,$data,"ID_A",$Id);
$conn->close();

require 'admin.php';
}
/*-----------------------------Editimi i produkteve ne ADMIN------------------------------*/
elseif (isset($_GET["Kodi"]))
{
    $data = $_GET["emri"];
    $Kodi=$_GET["Kodi"];
    $shtylla = $_GET["vlera"];
    $conn=lidhu_me_DB();
    $Kodi = $conn->real_escape_string($Kodi);
    $data = $conn->real_escape_string($data);
    edit_ne_DB($conn,"produktet",$shtylla,$data,"Kodi",$Kodi);
    $conn->close();

    require 'admin.php';
}

?>
