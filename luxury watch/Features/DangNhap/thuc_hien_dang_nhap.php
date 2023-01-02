<?php 
$tenDangNhap = $_POST['username'];
$matKhau = $_POST['pass'];

require("D://XAMPP//htdocs//exs//Luxury-watch-online//luxury watch//connect.php");

$maHoa_matKhau = md5($matKhau);
$sql = "SELECT tennguoidung FROM nguoidung WHERE tennguoidung = '".$tenDangNhap."' AND matkhau = '".$maHoa_matKhau."'";
$kqTruyVan = $con->query($sql);

if ($kqTruyVan->num_rows==1) {
	// code...
	echo "<script>alert(\"Đăng nhập thành công\")</script>";
	echo "<script> window.location.replace(\"/exs/Luxury-watch-online/luxury watch/index.php\")</script>";
}	
else {
	echo "<script>alert(\"Sai mật khẩu hoặc tài khoản\")</script>";
	echo "<script> window.location.replace(\"signin.php\")</script>";
}
 ?>
