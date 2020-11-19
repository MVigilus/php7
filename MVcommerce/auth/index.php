<?php
    
    $page=isset($_GET["page"]) ? $_GET["page"] : "login.php" ;
?>
<?php include '../inc/init.php' ?>
<?php include ROOT_PATH.'public/template-parts/header.php' ?>

<div id="main" class="container" style="margin-top:100px;">
        <div class="row">
            <!-- in bootstrap la pagina è composta da 12 colonne  -->
            <div class="col-9">
                <?php include ROOT_PATH.'auth\\pages\\'.$page; ?>            
            </div>

            <?php include ROOT_PATH.'public/template-parts/sidebar.php' ?>
        </div>
    </div>
    <?php include ROOT_PATH.'public/template-parts/footer.php' ?>
    