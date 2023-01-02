<?php
    $host='localhost';
    $user='root';
    $pass='';
    $db='luxury_watch_online';
    $con=new mysqli($host,$user,$pass,$db);
    if($con->connect_error)
    {
        die("Error".$con->connect_error);
    }