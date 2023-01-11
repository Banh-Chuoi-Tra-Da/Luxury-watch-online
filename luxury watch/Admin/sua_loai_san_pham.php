<?php
$id = $_GET['id'];
// echo $id;

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'btl';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tbl_loai_san_pham WHERE maloaisanpham = ".$id;
//echo $sql;
$ketquatruyvan = $conn->query($sql);
if ($ketquatruyvan->num_rows > 0){
    while ($loaisanpham = $ketquatruyvan->fetch_assoc()){
        $maloaisanpham = $loaisanpham['maloaisanpham'];
        $tenLoaisanpham = $loaisanpham['tenloaisanpham'];
    }
}

?>
<html>
    <head>
        <title>Sửa loại sản phẩm</title>
 <meta charset= "utf-8" http-equiv="content-type" />
        <script src="jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    </head>
    <body>
        <h2>Sửa loại sản phẩm</h2>
        <form method="post" action="thuc_hien_sua_loai_san_pham.php">
            <label>Tên loại hàng</label>
            <input name="tenloaisanpham" type="text" value="<?php echo $tenLoaisanpham;?>">
            <br>
            <input name="maloaisanpham" type="hidden"  readonly value="<?php echo $maloaisanpham;?>">

            <!-- <label>Mô tả</label>
            <input name="mo_ta" type="text">
            <br> -->
            <input value="Lưu" type="submit">
        </form>
    </body>
</html>