<style>
body {
padding: 0px;
margin: 0px;
background-color: #FAFAFA;
  }
  #kopf {
height: 100px;
margin: 10px;
background-color: #FAFAFA;
  }
  #fuss {
height: 50px;
margin: 10px;
background-color: #FAFAFA;
  }
  #mitte {
position: relative;
width: 100%;
  }
  #inhalt {
margin: 0px 250px;
background-color: #FAFAFA;
  }
  #links {
position: absolute;
top: 0px;
left: 10px;
width: 200px;

background-color: #FAFAFA;
  }
  #rechts {
position: absolute;
top: 0px;
right: 10px;
width: 200px;
height: 100%;
background-color: #FAFAFA;
  }

input[type="text"] {
    width: 100px;
    height: 20px;
    padding-right: 50px;
}

input[type="submit"] {
    margin-left: -50px;
    height: 20px;
    width: 50px;
    background: #088A85;
    color: #088A85;
    border: 0;
    -webkit-appearance: none;
}
.user-menu {
    position: relative;
    display: inline-block;
  }

  .user-info {
    display: flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
  }

</style>
  <div id="links">
  <br><br>
  <center>
<h2>    Antaret</h2>
</center>
<br>
<h> Mund të editoni secilin fushë të dhënave të antarëve duke e shënuar të dhënën e re dhe shtypur butonin e gjelbërt për të ruajtur ndryshimin</h3>
<br>
<?php

include_once 'funksionet.php'; 
$conn=lidhu_me_DB();
$result=lexo_ne_DB ($conn,"antaret");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<br>";

      foreach ($row as $key =>$value){
       
       /*if($key == 'Kodi') continue;*/
         echo '<form action="edit.php" method="GET">
         <input  name="emri" value='.htmlspecialchars($value).'>
         <input type="hidden" name="id" value="' . $row['ID_A'] . '">
         <input  name="vlera"  type="submit" value="'. $key.'">
         </form>';
          }
          echo "<br>";
    }
  }
 else {
    echo "Keine Daten gefunden";
}
?>
</div>

<div id="inhalt">
<center>
<h1>Mirësevini Administrator!</h1><hr><br><br>
<h2>Shtoni një antar duke i shënuar të dhënat e antarit</h2>
<form class="login-form" method="GET" action="shto_antaret.php">
     Emri.......: <input type="text" name="Emri"><br><br>
     Mbiemri....: <input type="text" name="Mbiemri" ><br><br>
     Ditelindja.: <input type="text" name="Ditelindja"><br><br>
     Adresa.....: <input type="text" name="Adresa"><br><br>
     Email......: <input type="text" name="Emajli"><br><br>
     Password...: <input type="text" name="Pasi"><br><br>
      <input type="submit" name="shtoantar" value="Shto_një_Antar" style="color:#FAFAFA; background-color: #088A85; margin-left: 10px; width: 110px;">
  </form>
  <br><br><br>
  <h2>Fshini një antar duke shënuar vetëm id e antarit</h2>
  <form class="login-form" method="GET" action="shto_antaret.php">
     ID: <input type="number" name="ID"><br><br>
    <input type="submit" name="shtoantar" value="Fshi_një_Antar" style="color:#FAFAFA; background-color: #088A85; margin-left: 10px; width: 110px;">
  </form><br><br>
  <hr><br><br>

<h2>Shto një produkt duke i shënuar të dhënat e produktit</h2>
<form class="login-form" method="GET" action="shto_antaret.php">
     Emri...........: <input type="text" name="Emri" ><br><br> 
     Përshkrimi...: <input type="text" name="Pershkrimi"><br><br>
     Qmimi........: <input type="text" name="Qmimi"><br><br>
     Sasia..........: <input type="text" name="Sasia"><br><br>
    <input type="submit" name="shtoantar" value="Shto_një_produkt" style="color:#FAFAFA; background-color: #088A85; margin-left: 10px; width: 110px;">
  </form>
  <br><br><br>
<h2>Fshini një produkt duke shënuar vetëm kodin e produktit</h2>
  <form class="login-form" method="GET" action="shto_antaret.php">
     Kodi: <input type="number" name="Kodi"><br><br>
    <input type="submit" name="shtoantar" value="Fshi_një_produkt" style="color:#FAFAFA; background-color: #088A85; margin-left: 10px; width: 110px;">
  </form>
  <hr>
</div>

</center>
<div id="rechts">
    <center>
        <?php
        if (isset($_GET['emri'])) {
            $emri = $_GET['emri'];
            echo "<div class='user-menu'>
                    <div class='user-info'>
                        <img src='ikona_admin.jpg' alt='Ikona' width='20px' height='20px'>
                        <br>
                        <span>$emri</span>
                    </div>
                    <br>
                    <a href='login.php'>
                        <button style='padding: 10px 20px; background-color: red; color: white; border: none; cursor: pointer;'>
                            Logout
                        </button>
                    </a>
                </div>";
        } else {
            echo "<a href='login.php'>Sign in</a>";
        }
        ?>
        <br><br>
    </center>
<h2>  Produktet</h2>
</center>
<br>
<h> Mund të editoni secilin fushë të dhënave të produkteve duke e shënuar të dhënën e re dhe shtypur butonin e gjelbërt për të ruajtur ndryshimin</h3>
<br>
<?php


$result=lexo_ne_DB ($conn,"produktet");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<br>";

      foreach ($row as $key =>$value){
     /*if($key == 'Kodi') continue;*/
         echo '<form action="edit.php" method="GET">
         <input  name="emri" value='.htmlspecialchars($value).'>
         <input type="hidden" name="Kodi" value="' . $row['Kodi'] . '">
         <input  name="vlera"  type="submit" value="'. $key.'">
         </form>';
          }
          echo "<br>";
      
    }
  }
     
 else {
    echo "Keine Daten gefunden";
}

$conn->close();
?>
</div>
