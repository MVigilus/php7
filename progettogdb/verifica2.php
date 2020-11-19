<?php
include_once "gestione2.php";

if($_POST['password']==$_POST['password2']){
    $password=$_POST['password'];
}else{
    die("password non combaciano");
}

$user=$_POST['user'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$cf=$_POST['cf'];
echo $cf;
$localita=$_POST['localita'];


$sql="INSERT INTO $tab_nome (cognome,nome,cf,localita,password,username) VALUES ('$cognome','$nome','$cf','$localita','$password','$user')";
        if(mysqli_query($conn,$sql)){
            echo '<script language=javascript>document.location.href="conferma.html"</script>';
        }else{
            echo "errore : ". mysqli_error($conn);
        }
?>