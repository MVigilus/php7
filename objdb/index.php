<?php
    $querystring = $_SERVER['QUERY_STRING'] != '' ? '?' . $_SERVER['QUERY_STRING'] : '';
    include "inc/init.php";
    include ROOT_PATH."public/template-parts/header.php";
    $page=isset($_GET['page'])? $_GET['page']:"homepage.php";
?>

<div id="main" class="container" style="margin-top:100px;">
        <div class="row">
            <!-- in bootstrap la pagina è composta da 12 colonne  -->
            <div class="col-9">
                <?php include ROOT_PATH.'public\\page\\'.$page; ?>
            </div>

            <?php include ROOT_PATH.'public/template-parts/sidebar.php' ?>
        </div>
    </div>
    <?php include ROOT_PATH.'public/template-parts/footer.php' ?>