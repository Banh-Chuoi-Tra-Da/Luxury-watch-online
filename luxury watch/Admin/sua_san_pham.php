<?php
$id = $_GET ['id']; // Lay ID cua mat hang can sua tren URL
// Ket noi CSDL
$servername="localhost";
$username="root";
$password="";
$dbname="btl";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die ("Connection failed: ".$conn->connect_error);
}
mysqli_query($conn, 'set names utf8');
// Ket noi CSDL

// Truy van mat hang co ID trung voi ID vua chon
$sql = "SELECT * FROM tbl_san_pham
       WHERE masanpham = ". $id;
$ketQuaTruyVan = $conn->query($sql);
// Truy van mat hang co ID trung voi ID vua chon

// Gan gia tri cho cac bien PHP se su dung de hien thi tren form
if($ketQuaTruyVan->num_rows>0){
    while($sanpham= $ketQuaTruyVan->fetch_assoc()){
        $tensanpham = $sanpham['tensanpham'];
        $mota = $sanpham['mota'];
        $Anh= $sanpham['anh'];        
        $dongia= $sanpham['dongia'];
        $loaisanpham= $sanpham['maloaisanpham'];
    }
}
// Gan gia tri cho cac bien PHP se su dung de hien thi tren form
?>
<html>
    <head>
    <title> Sửa sản phẩm</title>
    <meta charset= "utf-8" http-equiv="content-type" />
        <script src="jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            <h1>Sửa sản phẩm</h1>
            <form class="form form-horizontal" method="post" action="thuc_hien_sua_san_pham.php">
                <div class="form-group">
                    <label class="control-label col-sm-2">Tên sản phẩm </label>
                    <div class="col-sm-10">
                    <input value="<?=$tensanpham?>" type="text" class="form-control" name="ten_san_pham" placeholder="Tên sản phẩm">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Mô tả</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="mota" rows="9" cols="70"><?=$mota?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"> Ảnh </label>
                    <div class="col-sm-10">
                    <input value="<?=$Anh?>" type="file" class="form-control" name="anh" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"> Đơn Giá </label>
                    <div class="col-sm-10">
                    <input value="<?=$dongia?>" type="number" class="form-control" name="don_gia" />
                    </div>
                </div>
                <?php            
                $sql = "SELECT * FROM tbl_loai_san_pham";
                $ketQuaTruyVan = $conn->query($sql);
                ?>
                <div class="form-group">
                    <label class="control-label col-sm-2">Loại sản phẩm </label>
                    <div class="col-sm-10">
                    <select class="form-control" name=" ma_loai_san_pham">
                        <option value="0">Chọn loại sản phẩm</option>
                        <?php
                        if($ketQuaTruyVan->num_rows > 0){
                            while($loaisanpham = $ketQuaTruyVan->fetch_assoc()){
                                if($maloaisanpham['id']==$maloaisanpham){
                                ?>
                        <option selected="selected" value="<?php echo $loaisanpham['maloaisanpham'] ?>"><?php echo $loaisanpham['tenloaisanpham']?></option>
                                <?php    
                                }else{
                        ?>
                        <option value="<?php echo $loaisanpham['id'] ?>"><?php echo $loaisanpham['tenloaisanpham']?></option>
                        <?php
                                }
                            }
                        }
                        ?>
                    </select>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?=$id?>" />
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <input class="btn btn-success" type="submit" value="Lưu" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>