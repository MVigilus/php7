<?php
  $host="localhost";
  $username="root";
  $password="!Navigare15";
  $db_nome="mydb";
  $tab_nome="prodotti";
  $check;
  //connessione al server
  
  $conn=mysqli_connect($host,$username,$password);
  mysqli_select_db($conn,"mydb");
  $result= mysqli_query($conn,"SELECT * FROM $tab_nome");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">idProdotti</th>
            <th scope="col">prodotti</th>
            <th scope="col">costo</th>
            <th scope="col">quantita'</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($row = mysqli_fetch_array($result))
          {
              echo "<tr> \n";
              echo "<td>".$row['idProdotti']."</td> \n";
              echo "<td>".$row['prodotti']."</td> \n";
              echo "<td>".$row['costo']."</td> \n";
              echo "<td>".$row['qta']."</td> \n";
              echo "</tr> \n";
          }
          ?>
        </tbody>
      </table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>