<?php 
session_start();
$id=$_GET['id'];
unset($_SESSION['gio_hang'][$id]);
header('location:gio_hang.php');
?>