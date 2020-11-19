<?php
include_once "gestione.php";
$id=$_GET['par1'];
echo "<td>".$id."</td> \n";
$sql="DELETE FROM prodotti WHERE idProdotti=$id";
        if(mysqli_query($conn,$sql)){
            echo "prodotto eliminato correttamente torna indietro per eseguire un'altra operazione";
            echo '<script language=javascript>document.location.href="paginaAdmin.php"</script>';
        }else{
            echo "errore : ". mysqli_error($conn);
        }
?>