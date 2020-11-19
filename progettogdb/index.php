<?php
  include_once "gestione.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://startbootstrap.com/templates/agency/font-awesome-4.1.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='styleframe.css'>
<title>MVcommerce</title>
</head>
<body translate="no" id="page-top" class="index">
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <!-- rende il navbar responsive -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle nav</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Matteo Vigilante</a>
            </div>

            <!-- link menu -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#services">prodotti</a>
                    </li>
                    <li class="" >
                        <a class="page-scroll" href="accedi.html">accedi</a>
                    </li>
                </ul>
            </div>
            <!-- collapse -->
        </div>
        <!-- fine container -->
    </nav>
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Gestione database</div>
                <div class="intro-heading">sito per visualizzare prodotti</div>
            </div>
        </div>
    </header>
    
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Lista Prodotti</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
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
                      echo "<td><img src='images/".$row['image']."' ></td>";
                      echo "</tr> \n";
                  }
                  ?>
                </tbody>
              </table>
        </div>
    </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>
</html>