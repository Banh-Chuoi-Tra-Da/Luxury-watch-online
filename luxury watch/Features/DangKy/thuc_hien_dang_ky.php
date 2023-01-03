<?php 
$tenDangKy = $_POST['username'];
$eMail = $_POST['email'];
$matKhau = $_POST['pass'];
require("../../connect.php");

$maHoa_matKhau = md5($matKhau);

// ------------- Sử dụng phương thức Parameterized Statements để chống SQL Injection -----------
// Viết câu truy vấn
$sql = "INSERT INTO nguoidung (email, tennguoidung, matkhau) VALUES ( ?, ?, ?)";
// Dùng phương thức prepare()
$statement = $con->prepare($sql);
// Truyền data vào câu truy vấn với phương thức bind_param()
// i - integer
// d - double
// s - string
// b - BLOB
$statement->bind_param("sss", $eMail, $tenDangKy, $maHoa_matKhau);
// Thực thi câu truy vấn
$statement->execute();
echo "<script>alert(\"Đăng ký thành công\")</script>";
echo "<script> window.location.replace(\"../../index.php\")</script>";

// $sql = "INSERT INTO nguoidung (email, tennguoidung, matkhau) VALUES ('".$eMail."', '".$tenDangNhap."', '".$maHoa_matKhau."')";

// if ($con->query($sql)) {
// 	echo "<script type=\"text/javascript\">
// 	alert(\"Đăng ký thành công\");
// 	</script>";
// 	echo "<script type=\"text/javascript\">location.replace(\"../../index.php\")</script>";
// }
// else {
// 	echo "<script>
// 	alert(\"Đăng ký không thành công\");
// 	</script>";
// 	echo "<script type=\"text/javascript\">location.replace(\"register.php\")</script>";
// }
?>

