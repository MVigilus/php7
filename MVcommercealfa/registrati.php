<?php
include_once "gestione.php";

$username=$_POST['user'];
$pass=$_POST['password'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$cf=$_POST['cf'];
$data=$_POST['nascita'];

$sql="INSERT INTO $tab_clienti (nome,cognome,DataNascita,cf,username,password) VALUES ('$nome','$cognome','$data','$cf','$username','$pass')";
if(mysqli_query($conn,$sql)){

}else{
    echo "errore :". mysqli_error($conn);
}

?>