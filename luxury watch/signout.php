<?php
session_start();
unset($_SESSION['ten_dang_nhap']);
unset($_SESSION['login']);
unset($_SESSION['id']);
unset($_SESSION['gio_hang']);
setcookie('remember',null,-1);
header('location:index.php');
?>