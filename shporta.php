<style>
body {
padding: 0px;
margin: 0px;
background-color: 741414;

  }
h1 {
color:ffffff;
text-align:center;
top :20px;

}

.button {
    width: 250px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #04AA6D;} /* Green */
.button2 {background-color: #ff1b1b;} /* Blue */

  #links {
position: absolute;
top: 50px;
left: 100px;
width: 1000px;
height:500px;
background-color: #f0f0ff;
        color: #741414;
text-align:center;
  }
  #rechts {
position: absolute;
top: 50px;
right: 100px;
width: 400px;
height:500px;
background-color: #741414;
text-align:center;
  }



</style>

<style>

.csvTable{
    font-size: 12pt;

}    

.csvTable th{
    text-align:center;
    border-bottom: 1px solid #fff;
}

.csvTable td{

    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    text-align:center;
    color: #741414;
}    

</style>

<?php
$productId = $_GET["id"]; 
$userId = $_GET["ida"]; 
$sasia=0;
$EMRI="";
$ID="";
include 'conn.php';
    $sql = "SELECT * FROM wk WHERE idantari = $userId AND idprodukti = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $sql = "UPDATE wk SET Sasiaeporosis = Sasiaeporosis + 1 WHERE idantari = $userId AND idprodukti = $productId";
        $conn->query($sql);
    } else {

        $sql = "INSERT INTO wk (idantari, idprodukti, Sasiaeporosis) VALUES ($userId, $productId, 1)";
        $conn->query($sql);
    }


    $sql = "SELECT * FROM wk
            INNER JOIN antaret ON wk.idantari = antaret.ID_A
            INNER JOIN produktet ON wk.idprodukti = produktet.Kodi
            WHERE idantari = $userId";



    $result = $conn->query($sql);
    $total = 0;

    echo "<h1>B a s k e t</h1><div id='links'>";
    echo "<br>Items in Basket: <br><br>";


        echo "<table class='csvTable'><tr><td> __Item code__ </td><td> ____Item name____ </td><td> __________Item description__________ </td><td> __Item price__ </td><td> __Item quantity__ </td></tr>";
    while ($row = $result->fetch_assoc()) {
        $EMRI=$row['Emri'];
        $IDa=$row['ID_A'];
        $total += $row['Qmimi'] * $row['Sasiaeporosis'];
        $sasia +=$row['Sasiaeporosis'];
        echo "<tr>";
        echo "<td>". $row['Kodi'] ."</td>";
        echo "<td>". $row['Emri_P'] ."</td>";   
        echo "<td>". $row['Pershkrimi'] ."</td>";
        echo "<td>". $row['Qmimi'] ."</td>";  
        echo "<td>". $row['Sasiaeporosis'] ."</td>";            
        echo "</tr>";
    }
        echo "</table>";

    echo "<br>Number of items ordered......................  ".$sasia." piece<br>";
    echo "<br>Total amount...................................".$total." EURO";
    echo "</div><div id='rechts'>";
    echo "<br><a href='index.php?emri=" . urlencode($EMRI) .'&id='.urlencode($IDa). "'><button class='button button1'>Add item to Basket</button></a>";
    echo "<br><a href='shlyjeshporten.php?delete=1&ida=" .urlencode($IDa) . "'><button class='button button1'>Delete items from Basket</button></a></div>";

    
?>

