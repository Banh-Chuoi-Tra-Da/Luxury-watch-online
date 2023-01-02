<?php 
require("../../connect.php");
$tenDangNhap = $_POST['username'];
$matKhau = $_POST['pass'];



$maHoa_matKhau = md5($matKhau);
$sql = "SELECT * FROM nguoidung WHERE tennguoidung = '".$tenDangNhap."' AND matkhau = '".$maHoa_matKhau."'";
$kqTruyVan = $con->query($sql);

if ($kqTruyVan->num_rows==1) {
	// code...
	session_start();
	$data_dn = $kqTruyVan->fetch_assoc();
	$_SESSION['login'] = $data_dn;
	var_dump($_SESSION['login']);
	echo "<script>alert(\"Đăng nhập thành công\")</script>";
	echo "<script> window.location.replace(\"http://localhost/Luxury-watch-online/luxury%20watch/index.php\")</script>";

}	
else {
	echo "<script>alert(\"Sai mật khẩu hoặc tài khoản\")</script>";
	echo "<script> window.location.replace(\"signin.php\")</script>";
}
 ?>