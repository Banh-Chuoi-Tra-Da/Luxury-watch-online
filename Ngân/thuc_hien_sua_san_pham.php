<?php
$id=$_POST['id'];
$tensanpham= $_POST['ten_san_pham'];
$mota= $_POST['mota'];
//$hinhAnh = $_POST['hinh_anh'];
$dongia = $_POST['don_gia'];
$maloaisanpham = $_POST['ma_loai_san_pham'];

$servername="localhost";
$username="root";
$password="";
$dbname="btl";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die ("Connection failed: ".$conn->connect_error);
}

mysqli_query($conn,'set names utf8');
$sql =" UPDATE `san_pham` 
        SET `tensanpham`='". $tensanpham . "',
            `mota`='" . $mota . "',
            `dongia`='". $dongia . "',
            `maloaisanpham`='". $maloaisanpham ."'
        WHERE `masanpham`=".$id;
        
if($conn->query($sql)){
    echo "Sửa thành công";
    echo "
        <script>
        window.location = 'danh_sach_san_pham.php';
        </script>
    ";
}
else {
    echo "Không sửa được";
    echo "
        <script>
        window.location = 'danh_sach_san_pham.php';
        </script>
    ";
}
?>