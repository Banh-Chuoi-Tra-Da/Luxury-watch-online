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
// ------------- Sử dụng phương thức Parameterized Statements để chống SQL Injection -----------
// Viết câu truy vấn
$sql = "SELECT id, names, admin FROM tbl_nguoi_dung WHERE names = ? AND passwords = ? LIMIT 0,1";
// Dùng phương thức prepare()
$statement = $con->prepare($sql);
// Truyền data vào câu truy vấn với phương thức bind_param()
// i - integer
// d - double
// s - string
// b - BLOB
$statement->bind_param("ss", $tenDangNhap, $matKhau);
// Thực thi câu truy vấn
$statement->execute();
// Trả dữ liệu về biến data, liên kết các biến để chuẩn bị câu lệnh hiển thị kết quả
$statement->bind_result($data0, $data1, $data2);
// fetch dữ liệu
if($statement->fetch()!=NULL){
// In dữ liệu
    $each['id'] = $data0;
    $each['ten_dang_nhap'] = $data1;
    $each['admin'] = $data2;

    session_start();
    $_SESSION["login"] = $each;
    // var_dump($_SESSION['login']);
    $_SESSION["id"] = $each['id'];
    $_SESSION["ten_dang_nhap"] = $each['ten_dang_nhap'];

    if ($remmember) {
        $token = uniqid('user_', true);
        $sql = "UPDATE `tbl_nguoi_dung` SET `token`='" . $token . "'
        WHERE `id`=" . $each['id'];
        mysqli_query($con, $sql);
        setcookie('remember', $token, time() + 60 * 60 * 24 * 30);
    }
        echo "<script>alert(\"Đăng nhập thành công\")</script>";
        if($each['admin']==1){
            echo "<script> window.location.replace(\"Admin/dashboard.php\")</script>";
        }
        else{
        echo "<script> window.location.replace(\"index.php\")</script>";
        }
    }

else{
    echo "<script>alert(\"Sai mật khẩu hoặc tài khoản\")</script>";
    echo "<script> window.location.replace(\"signin.php\")</script>";
}


// $maHoa_matKhau = md5($matKhau);
// $sql = "SELECT * FROM `tbl_nguoi_dung` WHERE names = '" . $tenDangNhap . "' AND passwords = '" . $matKhau . "'";
// $ketQuaTruyVan = $con->query($sql);
// // die($sql);
// $each = mysqli_fetch_array($ketQuaTruyVan);
// if ($ketQuaTruyVan->num_rows == 1) {
//     // echo "Đăng nhập thành công";
//     session_start();
//     $_SESSION["login"] = $each;
//     // var_dump($_SESSION['login']);
//     $_SESSION["id"] = $each['id'];
//     $_SESSION["ten_dang_nhap"] = $each['names'];
//     if ($remmember) {
//         $token = uniqid('user_', true);
//         $sql = "UPDATE `tbl_nguoi_dung` SET `token`='" . $token . "'
//         WHERE `id`=" . $each['id'];
//         mysqli_query($con, $sql);
//         setcookie('remember', $token, time() + 60 * 60 * 24 * 30);
//     }
//     echo "<script>alert(\"Đăng nhập thành công\")</script>";
//     if($each['admin']==1){
//         echo "<script> window.location.replace(\"Admin/dashboard.php\")</script>";
//     }
//     else{
//     echo "<script> window.location.replace(\"index.php\")</script>";
//     }
// } else {
//     echo "<script>alert(\"Sai mật khẩu hoặc tài khoản\")</script>";
//     echo "<script> window.location.replace(\"signin.php\")</script>";
// }
?>

