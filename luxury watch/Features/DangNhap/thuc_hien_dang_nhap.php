<?php 
$tenDangNhap = $_POST['username'];
$matKhau = $_POST['pass'];
require("../../connect.php");

$maHoa_matKhau = md5($matKhau);

// ------------- Sử dụng phương thức Parameterized Statements để chống SQL Injection -----------
// Viết câu truy vấn
$sql = "SELECT tennguoidung FROM nguoidung WHERE tennguoidung = ? AND matkhau = ? LIMIT 0,1";
// Dùng phương thức prepare()
$statement = $con->prepare($sql);
// Truyền data vào câu truy vấn với phương thức bind_param()
// i - integer
// d - double
// s - string
// b - BLOB
$statement->bind_param("ss", $tenDangNhap, $maHoa_matKhau);
// Thực thi câu truy vấn
$statement->execute();
// Trả dữ liệu về biến data, liên kết các biến để chuẩn bị câu lệnh hiển thị kết quả
$statement->bind_result($data);
// fetch dữ liệu
if($statement->fetch()!=NULL){
// In dữ liệu
	echo "<script>alert(\"Đăng nhập thành công\")</script>";
	echo "<script> window.location.replace(\"/exs/Luxury-watch-online/luxury watch/index.php\")</script>";
}
else{
	echo "<script>alert(\"Sai mật khẩu hoặc tài khoản\")</script>";
	echo "<script> window.location.replace(\"signin.php\")</script>";
}

//-------------Lệnh khó tránh SQL Injection-----------------
// $sql = "SELECT tennguoidung FROM nguoidung WHERE tennguoidung = '".$tenDangNhap."' AND matkhau = '".$maHoa_matKhau."'";

// if ($kqTruyVan->num_rows==1) {
// 	// code...
// 	echo "<script>alert(\"Đăng nhập thành công\")</script>";
// 	echo "<script> window.location.replace(\"/exs/Luxury-watch-online/luxury watch/index.php\")</script>";
// }	
// else {
// 	// echo "<script>alert(\"Sai mật khẩu hoặc tài khoản\")</script>";
// 	// echo "<script> window.location.replace(\"signin.php\")</script>";
// }
?>
