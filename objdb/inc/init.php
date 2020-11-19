<?php
    define('ROOT_URL','http://localhost:8080/php7/objdb/');
    define('ROOT_PATH','C:\\xampp\\htdocs\\php7\\objdb\\');
    define('db_host','localhost');
    define('db_user','root');
    define('db_pass','!Navigare15');
    define('db_name','mvcommerce');
    require_once ROOT_PATH . 'obj/DB.php';
    require_once ROOT_PATH . 'obj/prodotto.php';
    require_once ROOT_PATH . 'obj/user.php';
    require_once ROOT_PATH . 'obj/cart.php';
    $alertMsg = '';
    $conn = mysqli_connect(db_host, db_user, db_pass, db_name);
    $loggedInUser = null;
    $client_ip = $_SERVER['REMOTE_ADDR'];
    global $loggedInUser;
    session_start();
      
    
    if (isset($_SESSION['user'])) {
        $loggedInUser = unserialize($_SESSION['user']);
    }


    // Prevent from direct access
    if (! defined('ROOT_URL')) {
        die;
    }

    function esc($str) {
        global $conn;  
        return mysqli_real_escape_string($conn, htmlspecialchars($str));
    }

    function esc_html($str) {
        return htmlspecialchars($str);
    }

    function shorten($str) {
        return substr($str, 0, 30) . '...';
    }

    function random_string(){
        return substr(md5(mt_rand()), 0, 20);
    }

    global $loggedInUser;
  

    if (isset($_SESSION['user'])) {
        $loggedInUser = unserialize($_SESSION['user']);
    }
    
?>