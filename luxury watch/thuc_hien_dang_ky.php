<?php
$tenDangNhap = $_POST['username'];
$eMail = $_POST['email'];
$matKhau = $_POST['pass'];
require("connect.php");

// $maHoa_matKhau = md5($matKhau);
$sql = "INSERT INTO `tbl_nguoi_dung`(`email`, `names`, `passwords`) VALUES ('" . $eMail . "', '" . $tenDangNhap . "', '" . $matKhau . "')";

if ($con->query($sql)) {
    echo "<script type='text/javascript'>
    window.alert('Đăng ký thành công');
    window.location.href='signin.php';
</script>";
};
