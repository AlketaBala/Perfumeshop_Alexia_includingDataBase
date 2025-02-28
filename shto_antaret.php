<?php
include 'funksionet.php';
$aksioni=$_GET["shtoantar"];
/*-----------------------SHTO NJE ANTARE NE ADMIN------------------------------------ */
if($aksioni=="Shto_një_Antar")
{
    $data = array(
        "Emri" => $_GET["Emri"],
        "Mbiemri" => $_GET["Mbiemri"],
        "Ditelindja" => $_GET["Ditelindja"],
        "Adresa" => $_GET["Adresa"],
        "Emajli" => $_GET["Emajli"],
        "Pasi" => $_GET["Pasi"]        
    );
    $conn=lidhu_me_DB();
    shto_ne_DB($conn, "antaret", $data);
    require 'admin.php';
}
/*-----------------------FSHI NJE ANTARE NE ADMIN------------------------------------ */
if($aksioni=="Fshi_një_Antar"){
    $Id = $_GET["ID"];
    $conn=lidhu_me_DB();
    fshi_ne_DB($conn,"antaret","ID_A",$Id);
    require 'admin.php';
}
/*-----------------------SHTO NJE PRODUKT NE ADMIN------------------------------------ */
if($aksioni=="Shto_një_produkt")
{
    $data = array(
        "Emri_P" => $_GET["Emri"],
        "Pershkrimi" => $_GET["Pershkrimi"],
        "Qmimi" => $_GET["Qmimi"],
        "Sasia" => $_GET["Sasia"],      
    );
    $conn=lidhu_me_DB();
    shto_ne_DB($conn, "produktet", $data);
    require 'admin.php';
}
/*-----------------------FSHI NJE PRODUKT NE ADMIN------------------------------------ */
if($aksioni=="Fshi_një_produkt")
{
    $Kodi = $_GET["Kodi"];
    $conn=lidhu_me_DB();
    fshi_ne_DB($conn,"produktet","Kodi",$Kodi);
    require 'admin.php';
}
?>