<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='GET'&&isset($_GET['id_sp_bl_them'])){
    require('connect.php');
    $email = $_SESSION['login']['email'];
    $id_sp_bl_them = $_GET['id_sp_bl_them'];
    $noi_dung = $_GET['noi_dung_bl_them'];
    $sql_is_bl = "INSERT INTO `tbl_binh_luan`(`id_binh_luan`, `noi_dung_binh_luan`, `masanpham`, `email`) VALUES (NULL,'$noi_dung','$id_sp_bl_them','$email') ";
    $con->query($sql_is_bl);
    echo "
    <script>
    location.href = 'chi_tiet_san_pham.php?id=$id_sp_bl_them'
     </script>
     ";
}
if($_SERVER['REQUEST_METHOD']=='GET'&&isset($_GET['id_sp_xoa_bl'])){
    require('connect.php');
    $id_sp = $_GET['id_sp'];
    $id_sp_xoa_bl = $_GET['id_sp_xoa_bl'];
    $sql_dl_bl = "DELETE FROM `tbl_binh_luan` WHERE id_binh_luan=$id_sp_xoa_bl";
    $con->query($sql_dl_bl);
    echo "
    <script>
    location.href = 'chi_tiet_san_pham.php?id=$id_sp'
     </script>
     ";
}
if($_SERVER['REQUEST_METHOD']=='GET'&&isset($_GET['id_sp_bl_sua'])){
    require('connect.php');
    $email = $_SESSION['login']['email'];
    $id_sp_bl_sua = $_GET['id_sp_bl_sua'];
    $noi_dung_sua = $_GET['noi_dung_bl_sua'];
    $sql_dl_bl = "UPDATE `tbl_binh_luan` SET `noi_dung_binh_luan`='$noi_dung_sua' WHERE email='$email' and masanpham =$id_sp_bl_sua";
    $con->query($sql_dl_bl);
    echo "
    <script>
    location.href = 'chi_tiet_san_pham.php?id=$id_sp_bl_sua'
     </script>
     ";
}