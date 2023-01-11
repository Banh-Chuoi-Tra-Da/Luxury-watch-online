<?php
require('connect.php');

?>
<html>
    <head>
    <title>Danh sách nhà cung cấp</title>
    <meta charset= "utf-8" http-equiv="content-type" />
        <script src="jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    </head>
    <body>
    <?php include('menu_admin.php');?>

        <table>
            <div class="container">
                <table class="table table-striped table-bordered">
            <tr>
                <th>STT</th>
                <th>Tên nhà cung cấp</th>
                <th>Thao tác</th>
            </tr>
<?php
$sql = 'SELECT * FROM tbl_nha_cung_cap';

$ketquatruyvan = $con->query($sql);
if ($ketquatruyvan->num_rows > 0){
    $i = 1;
    while ($nhacungcap = $ketquatruyvan->fetch_assoc()){
?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $nhacungcap['tennhacungcap'];?></td>
                <td>
                        <a class="btn btn-info" href="sua_nha_cung_cap.php?id=<?php echo $nhacungcap['manhacungcap'];?>">Sửa</a>  
                        <a class="btn btn-danger" href="xoa_nha_cung_cap.php?id=<?php echo $nhacungcap['manhacungcap'];?>">Xóa</a>
                </td>
            </tr>
<?php
        $i++;
    }
}
?>
            <tr>
             <td>   <a class ="btn btn-success" href="them_nha_cung_cap.php">Thêm mới</a></td>
            </tr>
        </table>
    </body>
</html>
