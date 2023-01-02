<?php
$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "btl";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,'set names utf8'); 

// Kiểm tra
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM san_pham
        WHERE masanpham = ".$id;
    
    if ($conn->query($sql)) {
    echo "Xóa thành công";
    }
    else {
    echo "Không xóa được";
    }
?>