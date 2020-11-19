<?php 
    $page=isset($_GET["page"]) ? $_GET["page"] : "homepage.php" ;
    $v=isset($_GET["v"]) ? $_GET["v"] : "homepage.php" ;
    include 'tem/header.php';
    include 'pages/videoc.php';
?>
    <div id="main">
        <div class="container">
            <div class="row">
                <div class="col-9">
                <hr>
                <?php 
                if(isset($_GET["v"])){
                    ?>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://<?php echo $url[$v]; ?>" allowfullscreen></iframe>
                    </div>
                    <?php
                }else{
                    include 'pages\\'.$page;
                }
                 
                ?>
                </div>
                <?php 
                 include "tem/sidebar.php";
                ?>
            </div>
        </div>
    </div>
    <?php 
    include 'tem/footer.php';
?>  
    