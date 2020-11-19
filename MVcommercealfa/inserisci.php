<?php
    include_once "gestione.php";

    $nome=$_POST['nome'];
    $d=$_POST['descr'];
    $costo=$_POST['costo'];
    $qta=$_POST['qta'];
    $sql="INSERT INTO $tab_prodotti (prodotto,descrizione,costo,qta) VALUES ('$nome','$d','$costo','$qta')";
    $img ="SELECT  FROM ";
    if(mysqli_query($conn,$sql)){
        echo "prodotto inserito correttamente torna indietro oppure seleziona un'immagine per il tuo prodotto";
    }else{
        echo "errore : ". mysqli_error($conn);
    }
?> 