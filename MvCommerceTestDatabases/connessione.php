<?php
    $host="localhost";
    $username="root";
    $password="!Navigare15";
    $db_nome="mvcommerce";
    $tab_nome="product";
    $conn=mysqli_connect($host,$username,$password);

    if(!$conn){
        die("errore connessione " . mysqli_connect_error());
    }
?>