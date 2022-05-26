<?php
function conectar(){
    $host="localhost";
    $user="admin737";
    $pass="Pass.Pass";

    $bd="computo";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
