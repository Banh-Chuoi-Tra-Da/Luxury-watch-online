<?php
session_start();
unset($_SESSION['ten_dang_nhap']);
unset($_SESSION['login']);
unset($_SESSION['id']);
setcookie('remember',null,-1);
header('location:index.php');
?>