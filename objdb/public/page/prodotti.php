<?php
    $pm= new ProductManager();
    $prodotti=$pm->getAll();
?>

<h1>Lista prodotti</h1>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>descrizione</th>
            <th>prezzo</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($prodotti as $p){
              echo "<tr> \n";
              echo "<td>".$p->name."</td> \n";
              echo "<td>".$p->descript."</td> \n";
              echo "<td>".$p->price."</td> \n";
              echo "</tr> \n";
            }
        ?>
    </tbody>
</table>