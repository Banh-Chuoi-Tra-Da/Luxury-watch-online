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
    // Trừ đi số lượng trong danh mục sản phẩm
    $soluongcon = (int)$each['soluong'] - (int)$each['soluongmua'];
}
$customer_id = $_SESSION['id'];

$sql = "INSERT INTO `tbl_hoa_don`(`nguoi_dung_id`, `tong_tien`, `phone_number`, `address`)
     VALUES ('" . $customer_id . "','" . $total_price . "','" . $phone_number . "','" . $address . "')";
$con->query($sql);
// lấy ra hóa đơn vừa insert;
$sql = "SELECT max(id) from tbl_hoa_don where nguoi_dung_id=" . $customer_id;
$result = $con->query($sql);
$order_id = mysqli_fetch_array($result)['max(id)'];

// lấy thông tin insert vào chi tiết hóa đơn từ session giỏ hàng;
foreach ($gio_hang as $gio_hang_id => $each) {
    $soluong = $each['soluongmua'];
    $gia_ban = $each['gia_ban'];
    $sql = "INSERT INTO `tbl_chi_tiet_hoa_don`(`hoa_don_id`, `mat_hang_id`, `gia_ban`, `so_luong`) VALUES ('" . $order_id . "','" . $gio_hang_id . "','" . $gia_ban . "','" . $soluong . "')";
    mysqli_query($con, $sql);
}
// Cập nhập số lượng 

$sql = "UPDATE `tbl_san_pham` SET `soluong` = '$soluongcon' where `masanpham` = '" . $each['masanpham'] . "'";
$sql="SELECT * from tbl_nguoi_dung WHERE id='" . $customer_id . "'";
$result = $con->query($sql);
$each = mysqli_fetch_array($result);
$email = $each['email'];
$name = $each['names'];
// echo $email;
// echo $name;
// die();

// Gửi mail mua hàng thành công
require('sendmail.php');
$title = 'Mua hàng thành công';
$content = "Cảm ơn bạn đã mua hàng tại Luxury watch. Thông tin chi tiết của đơn hàng được lưu trong danh mục lịch sử mua hàng. Trân trọng!";
send_mail($email, $name, $title, $content);
mysqli_query($con, $sql) or die("Lỗi câu lệnh update số lượng sản phẩm");
mysqli_close($con);
unset($_SESSION['gio_hang']);
// die();
// header('location:index.php');
echo "<script type='text/javascript'>
                window.alert('Cập nhập thông tin thành công');
                window.location.href='index.php';
            </script>";
