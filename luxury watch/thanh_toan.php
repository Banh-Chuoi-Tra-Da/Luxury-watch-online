<?php
$ten_nguoi_nhan = $_POST['ten_nguoi_nhan'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
require('connect.php');
session_start();
$gio_hang = $_SESSION['gio_hang'];
$total_price = 0;
foreach ($gio_hang as $each) {
    $total_price += $each['soluongmua'] * $each['gia_ban'];
}
$customer_id = $_SESSION['id'];

$sql = "INSERT INTO `tbl_hoa_don`(`nguoi_dung_id`, `tong_tien`, `phone_number`, `address`)
 VALUES ('".$customer_id."','".$total_price."','".$phone_number."','".$address."')";
$con->query($sql);
// lấy ra hóa đơn vừa insert;
$sql="SELECT max(id) from tbl_hoa_don where nguoi_dung_id=".$customer_id;
$result=$con->query($sql);
$order_id=mysqli_fetch_array($result)['max(id)'];

// lấy thông tin insert vào chi tiết hóa đơn từ session giỏ hàng;
foreach($gio_hang as $gio_hang_id => $each){
    $soluong=$each['soluongmua'];
    $gia_ban=$each['gia_ban'];
    $sql="INSERT INTO `tbl_chi_tiet_hoa_don`(`hoa_don_id`, `mat_hang_id`, `gia_ban`, `so_luong`) VALUES ('".$order_id."','".$gio_hang_id."','".$gia_ban."','".$soluong."')";
    mysqli_query($con,$sql);
}
mysqli_close($con);
unset($_SESSION['gio_hang']);
// header('location:index.php');
echo "<script type='text/javascript'>
            window.alert('Thanh toán thành công');
            window.location.href='index.php';
        </script>";
