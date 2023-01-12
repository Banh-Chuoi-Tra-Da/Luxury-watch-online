<?php
$tenDangNhap = $_POST['username'];
$matKhau = $_POST['pass'];
if (isset($_POST['remember'])) {
    $remmember = true;
} else {
    $remmember = false;
}
require("connect.php");

// $maHoa_matKhau = md5($matKhau);
$sql = "SELECT * FROM `tbl_nguoi_dung` WHERE names = '" . $tenDangNhap . "' AND passwords = '" . $matKhau . "'";
$ketQuaTruyVan = $con->query($sql);
// die($sql);
$each = mysqli_fetch_array($ketQuaTruyVan);

if ($ketQuaTruyVan->num_rows == 1) {
    // echo "Đăng nhập thành công";
    session_start();
    $_SESSION["login"] = $each;
    // var_dump($_SESSION['login']);
    $_SESSION["id"] = $each['id'];
    $_SESSION["ten_dang_nhap"] = $each['names'];
    if ($remmember) {
        $token = uniqid('user_', true);
        $sql = "UPDATE `tbl_nguoi_dung` SET `token`='" . $token . "'
        WHERE `id`=" . $each['id'];
        mysqli_query($con, $sql);
        setcookie('remember', $token, time() + 60 * 60 * 24 * 30);
    }
    echo "<script>alert(\"Đăng nhập thành công\")</script>";
    echo "<script> window.location.replace(\"index.php\")</script>";
} else {
    echo "<script>alert(\"Sai mật khẩu hoặc tài khoản\")</script>";
    echo "<script> window.location.replace(\"signin.php\")</script>";
}
?>
