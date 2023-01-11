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

$sql = "DELETE FROM tbl_san_pham
        WHERE masanpham = ".$id;
    
    if ($conn->query($sql)) {
   // echo "Xóa thành công";
   echo "
        <script>
        window.location = 'danh_sach_san_pham.php';
        </script>
    ";
    }
    else {
    echo "Không xóa được";
    }
?>