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

$sql = "SELECT * FROM tbl_nha_cung_cap WHERE manhacungcap = ".$id;
//echo $sql;
$ketquatruyvan = $conn->query($sql);
if ($ketquatruyvan->num_rows > 0){
    while ($nhacungcap = $ketquatruyvan->fetch_assoc()){
        $manhacung = $nhacungcap['manhacungcap'];
        $tennhacungcap = $nhacungcap['tennhacungcap'];
    }
}

?>
<html>
    <head>
        <title>Sửa nhà cung cấp</title>
        <meta charset= "utf-8" http-equiv="content-type" />
        <script src="jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    </head>
    <body>
        <h2>Sửa nhà cung cấp</h2>
        <form method="post" action="thuc_hien_sua_nha_cung_cap.php">
            <label>Tên loại hàng</label>
            <input name="tennhacungcap" type="text" value="<?php echo $tennhacungcap;?>">
            <br>
            <input name="manhacungcap" type="hidden"  readonly value="<?php echo $manhacung;?>">

            <!-- <label>Mô tả</label>
            <input name="mo_ta" type="text">
            <br> -->
            <input value="Lưu" type="submit">
        </form>
    </body>
</html>