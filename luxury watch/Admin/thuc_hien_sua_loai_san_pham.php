<?php 
$tenloaisanpham = $_POST['tenloaisanpham'];
$id = $_POST['maloaisanpham'];

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

$sql = "UPDATE `tbl_loai_san_pham` SET 
`tenloaisanpham`='$tenloaisanpham' WHERE maloaisanpham=$id" ;
if ($conn->query($sql)) {
    // echo "Sửa mới thành công";
    echo "
        <script>
        window.location = 'danh_sach_loai_san_pham.php';
        </script>
    ";
}
else{
    echo "Không sửa mới được";
}
?>