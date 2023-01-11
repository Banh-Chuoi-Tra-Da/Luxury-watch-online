<?php
require('connect.php');

?>
    <html>
    <head>
    <title>Danh sách sản phẩm</title>
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
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Ảnh</th>
                <th>Thao tác</th>
                
            </tr>
<?php
$sql = 'SELECT * FROM tbl_san_pham';

$ketquatruyvan = $con->query($sql);
if ($ketquatruyvan->num_rows > 0){
    $i = 1;
    while ($sanpham = $ketquatruyvan->fetch_assoc()){
?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $sanpham['tensanpham'];?></td>
                <td><?php echo $sanpham['mota'];?></td>
                <td><?php echo $sanpham['soluong'];?></td>
                <td><?php echo $sanpham['dongia'];?></td>
                <td><?php echo $sanpham['anh'];?></td>
                <td>
                        <a class="btn btn-info" href="sua_san_pham.php?id=<?php echo $sanpham['masanpham'];?>">Sửa</a>  
                        <a class="btn btn-danger" href="xoa_san_pham.php?id=<?php echo $sanpham['masanpham'];?>">Xóa</a>
                </td>
            </tr>
<?php
        $i++;
    }
}
?>
            <tr>
             <td>   <a class ="btn btn-success" href="them_san_pham.php">Thêm mới</a></td>
            </tr>
        </table>
    </body>
</html>
