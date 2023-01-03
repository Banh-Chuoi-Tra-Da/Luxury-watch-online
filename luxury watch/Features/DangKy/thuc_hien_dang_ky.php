<?php 
$tenDangNhap = $_POST['username'];
$eMail = $_POST['email'];
$matKhau = $_POST['pass'];
require("D://XAMPP//htdocs//exs//Luxury-watch-online//luxury watch//connect.php");

$maHoa_matKhau = md5($matKhau);
$sql = "INSERT INTO nguoidung (email, tennguoidung, matkhau) VALUES ('".$eMail."', '".$tenDangNhap."', '".$maHoa_matKhau."')";

if ($con->query($sql)) {
	echo "<script type=\"text/javascript\">
	alert(\"Đăng ký thành công\");
	</script>";
	echo "<script type=\"text/javascript\">location.replace(\"../../index.php\")</script>";
}
else {
	echo "<script>
	alert(\"Đăng ký không thành công\");
	</script>";
	echo "<script type=\"text/javascript\">location.replace(\"register.php\")</script>";
}
?>

