<?php
//stabiliamo la connessione
$host="localhost";
$username="root";
$password="!Navigare15";
$db_nome="mvcommerce";
$tab_clienti="clienti";
$tab_carrello="carrello";
$tab_prodotti="prodotti";
$tab_vendite="vendite";
//connessione al server

$conn=mysqli_connect($host,$username,$password);
mysqli_select_db($conn,$db_nome);

/*if (!$(istruzione query)) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
} */

?>