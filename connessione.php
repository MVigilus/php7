<?php
    $host="sql105.epizy.com";
    $username="epiz_25339938";
    $password="857G5NAoj7";
    $db_nome="epiz_25339938_db1";
    $tab_nome="prodotti";
    
    $conn=mysqli_connect($host,$username,$password);

    if(!$conn){
        die("errore connessione " . mysqli_connect_error());
    }

    mysqli_select_db($conn,"$db_nome");
    if ($result = mysqli_query($conn, "SELECT DATABASE()")) {
        $row = mysqli_fetch_row($result);
        printf("Default database is %s.\n", $row[0]);
        mysqli_free_result($result);
    }
    $result= mysqli_query($conn,"SELECT * FROM $tab_nome");
    while($row = mysqli_fetch_array($result))
    {
        echo $row['idProdotti'] . " " . $row['prodotti'] . " " . $row['costo'] ." ". $row['qta'] ;
    }
?>