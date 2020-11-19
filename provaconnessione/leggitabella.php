<?php
    include_once('mysql-fix.php');
    $host="localhost";
    $username="root";
    $password="!Navigare15";
    $db_nome="mydb";
    $tab_nome="prodotti";

    //connessione al server
    
    $conn=mysqli_connect($host,$username,$password);

    if(!$conn){
        die("errore connessione " . mysqli_connect_error());
    }

    //selezione database
    mysqli_select_db($conn,"mydb");
    // conferma scelta database
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