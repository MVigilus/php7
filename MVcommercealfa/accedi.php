<?php
    include_once "gestione.php";
    $user=$_POST['user'];
    $pass=$_POST['password'];
    
    //query con la ricerca di credenziali che combaciano
    $result= mysqli_query($conn,"SELECT * FROM $tab_clienti WHERE username='$user' AND password='$pass'");
    
    //calcola numero righe
    $ver=mysqli_num_rows($result);

    //cerca cliente e crea sessione 
    if($user=="admin" && $pass=="admin"){
        session_start();
        $_SESSION['email']=$user;
        $_SESSION['password']=$pass;
        echo "pagina admin";
    }else if($ver==1){
       session_start();
       $_SESSION['email']=$user;
        $_SESSION['password']=$pass;
        echo "pagina di $user";
    }else{
        echo "credenziali non registrate";
    }
?>