<?php
include_once "gestione.php";
$id=$_POST['id'];
$np=$_POST['np'];
$qta=$_POST['qta'];
$costo=$_POST['costo'];

$sql="INSERT INTO prodotti (idProdotti,prodotti,costo,qta) VALUES ('$id','$np','$costo','$qta')";
        if(mysqli_query($conn,$sql)){
            echo '<script language=javascript>document.location.href="paginaAdmin.php"</script>';
        }else{
            echo "errore : ". mysqli_error($conn);
        }
?>