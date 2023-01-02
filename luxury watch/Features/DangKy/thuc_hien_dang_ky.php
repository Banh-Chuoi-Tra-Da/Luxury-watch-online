<?php 
$tenDangNhap = $_POST['username'];
$eMail = $_POST['email'];
$matKhau = $_POST['pass'];
require("../../connect.php");

$maHoa_matKhau = md5($matKhau);
$sql = "INSERT INTO nguoidung (email, tennguoidung, matkhau) VALUES ('".$eMail."', '".$tenDangNhap."', '".$maHoa_matKhau."')";

if ($con->query($sql)) {
	echo "<script type=\"text/javascript\">window.alert(\"Đăng ký thành công\")</script>";
}
?>