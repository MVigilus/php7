<?php
    include_once "gestione2.php";
    $admin=$_POST['username'];
    $pass=$_POST['password'];

    $result= mysqli_query($conn,"SELECT * FROM $tab_nome WHERE username='$admin' AND password='$pass'");
    $ver=mysqli_num_rows($result);

    if($admin=="admin" && $pass=="admin"){
        session_start();
        $_SESSION['email']=$admin;
        $_SESSION['password']=$pass;
        echo '<script language=javascript>document.location.href="paginaAdmin.php"</script>';
    }else if($ver==1){
       session_start();
       $_SESSION['email']=$admin;
        $_SESSION['password']=$pass;
        echo '<script language=javascript>document.location.href="paginauser.php"</script>';
    }else{
        echo "credenziali non registrate";
    }

?>