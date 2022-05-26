<?php
function conectar(){
    $host="13.0.0.4";
    $user="admin737";
    $pass="Pass.Pass";

    $bd="computo";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
