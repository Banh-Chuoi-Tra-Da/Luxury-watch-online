<?php
$tenDangNhap = $_POST['username'];
$eMail = $_POST['email'];
$matKhau = $_POST['pass'];
//Add SDT, Address
$phone_number=$_POST['phone_number'];
$address=$_POST['address'];
require("connect.php");

// $maHoa_matKhau = md5($matKhau);
$sql = "INSERT INTO `tbl_nguoi_dung`(`email`, `names`, `passwords`,`phone_number`,`address`) VALUES ('" . $eMail . "', '" . $tenDangNhap . "', '" . $matKhau . "','" . $phone_number . "','" . $address . "')";
// $con->query($sql);
// require('sendmail.php');
// $title='Đăng ký thành công';
// $content="Chúc mừng bạn đăng ký thành công: <a href='https:google.com'></a>";
// send_mail($email,$name,$title,$content);
if ($con->query($sql)) {
    echo "<script type='text/javascript'>
    window.alert('Đăng ký thành công');
    window.location.href='signin.php';
</script>";
};
