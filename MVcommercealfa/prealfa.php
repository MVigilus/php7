<?php
include_once "gestione.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<h1>prova registrazione e accesso</h1>
<form action="accedi.php" method="post">
username e password <input type="text" id="user" name="user">
<input type="password" id="password" name="password">
<button type="submit" id="submit" class="btn btn-primary">Accedi</button>
</form>
<form action="registrati.php" method="post">
nome cognome datanascita cf username e password 
<input type="text" id="nome" name="nome">
<input type="text" id="cognome" name="cognome">
<input type="date" id="nascita" name="nascita">
<input type="text" id="cf" name="cf">
<input type="text" id="user" name="user">
<input type="password" id="password" name="password">
<button type="submit" id="submit" class="btn btn-primary">Registrati</button>
</form>
<h1></h1>
<table class="table">
                <thead>
                  <tr>
                    <th scope="col">idcliente</th>
                    <th scope="col">nome</th>
                    <th scope="col">cognome</th>
                    <th scope="col">data nacita'</th>
                    <th scope="col">cf</th>
                    <th scope="col">username</th>
                    <th scope="col">password</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $result=mysqli_query($conn,"SELECT * FROM $tab_clienti");
                  while($row = mysqli_fetch_array($result))
                  {
                      echo "<tr> \n";
                      echo "<td>".$row['idclienti']."</td> \n";
                      echo "<td>".$row['nome']."</td> \n";
                      echo "<td>".$row['cognome']."</td> \n";
                      echo "<td>".$row['DataNascita']."</td> \n";
                      echo "<td>".$row['cf']."</td> \n";
                      echo "<td>".$row['username']."</td> \n";
                      echo "<td>".$row['password']."</td> \n";
                      echo "</tr> \n";
                  }
                  ?>
                </tbody>
</table>
<h1>Prova inserimento prodotti</h1>
<form action="inserisci.php" method="post" >
nome descrizione costo qta
<input type="text" id="nome" name="nome">
<input type="text" id="descr" name="descr">
<input type="number" id="costo" name="costo" step="any">
<input type="number" id="qta" name="qta">
<button type="submit" id="submit" class="btn btn-primary" >inserisci prodotto</button>
</form>
<table class="table">
                <thead>
                  <tr>
                    <th scope="col">idprodotto</th>
                    <th scope="col">nome</th>
                    <th scope="col">descrizione</th>
                    <th scope="col">costo</th>
                    <th scope="col">qta</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $result=mysqli_query($conn,"SELECT * FROM $tab_prodotti");
                  while($row = mysqli_fetch_array($result))
                  {
                      echo "<tr> \n";
                      echo "<td>".$row['idprodotti']."</td> \n";
                      echo "<td>".$row['prodotto']."</td> \n";
                      echo "<td>".$row['descrizione']."</td> \n";
                      echo "<td>".$row['costo']."</td> \n";
                      echo "<td>".$row['qta']."</td> \n";
                      echo "</tr> \n";
                  }
                  
                  ?>
                </tbody>
</table>
<form action="cerca.php" method="post" >
cerca
<input type="text" id="cc" name="cc">
<button type="submit" id="submit" class="btn btn-primary" >cerca</button>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>
</html>