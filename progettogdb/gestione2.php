<?php
$host="localhost";
$username="root";
$password="!Navigare15";
$db_nome="mydb";
$tab_nome="clienti";
//connessione al server

$conn=mysqli_connect($host,$username,$password);
mysqli_select_db($conn,$db_nome);
$result= mysqli_query($conn,"SELECT * FROM $tab_nome");
?>