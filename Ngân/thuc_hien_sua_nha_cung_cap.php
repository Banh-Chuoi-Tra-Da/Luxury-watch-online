<?php 
$tennhacungcap = $_POST['tennhacungcap'];
$id = $_POST['manhacungcap'];

// -------------------------------- Kết nối CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "btl";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,'set names utf8'); // Hiển thị dữ liệu tiếng Việt (ko cần thiết lắm)

// Kiểm tra
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `nhacungcap` SET 
`tennhacungcap`='$tennhacungcap' WHERE manhacungcap=$id" ;
if ($conn->query($sql)) {
    echo "Sửa mới thành công";
}
else{
    echo "Không sửa mới được";
}
?>