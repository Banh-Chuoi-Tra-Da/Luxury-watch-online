<?php
    $host='localhost';
    $user='root';
    $pass='';
    $db='btl';
    $con=new mysqli($host,$user,$pass,$db);
    if($con->connect_error)
    {
        die("Error".$con->connect_error);
    }
?>
