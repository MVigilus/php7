<?php
include_once "gestione.php";

$cerca=$_POST['cc'];
$sql_cerca = mysqli_query($conn,"SELECT * FROM $tab_prodotti  WHERE (prodotto LIKE '%" . $cerca . "%') ");
$indice = mysqli_num_rows($sql_cerca);

if($indice>0){
    echo "sono stati trovati : ".$indice." risultati";
    while($row = mysqli_fetch_array($sql_cerca)) {

        echo '<p>' . $row['prodotto'] . '</p>';
        
    }
    
}else{
    echo "non sono trovati risultati";
}
?>