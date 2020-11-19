<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host="localhost";
        $username="root";
        $password="!Navigare15";
        $db_nome="mydb";
        $tab_nome="prodotti";

        $conn=mysqli_connect($host,$username,$password);

        if(!$conn){
            die("errore connessione " . mysqli_connect_error());
        }
        mysqli_select_db($conn,"mydb");
        $row=mysqli_query($conn,"SELECT MAX(idProdotti) FROM $tab_nome");
        $idProdotti=mysqli_fetch_array($row);
        $idProdotti[0]++;
        $prodotti=$_POST["prodotti"];
        $costo=$_POST["costo"];
        $qta=$_POST["qta"];
        $sql="INSERT INTO prodotti (idProdotti,prodotti,costo,qta) VALUES ('$idProdotti[0]','$prodotti','$costo','$qta')";
        if(mysqli_query($conn,$sql)){
            echo "prodotto inserito correttamente torna indietro per eseguire un'altra operazione";
        }else{
            echo "errore : ". mysqli_error($conn);
        }
    ?>
</body>
</html>