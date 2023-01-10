<?php
session_start();
$id=$_GET['id'];
$type=$_GET['type'];
if($type=='0')
{
    if($_SESSION['gio_hang'][$id]['soluongmua']>1){
        $_SESSION['gio_hang'][$id]['soluongmua']--;
    }else{
        unset($_SESSION['gio_hang'][$id]);
    }

}else{
    $_SESSION['gio_hang'][$id]['soluongmua']++;

}
header('location:gio_hang.php');

?>