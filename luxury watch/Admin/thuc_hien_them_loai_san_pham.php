<?php

require('connect.php');
$tenloaisanpham=$_POST['tenloaisanpham'];
$sql = "INSERT INTO `tbl_loai_san_pham` (`tenloaisanpham`) 
VALUES ('". $tenloaisanpham ."')";
// echo $sql;


if ($con->query($sql)) {
    // echo "Thêm mới thành công";
    echo "
        <script>
        window.location = 'danh_sach_san_pham.php';
        </script>
    ";
} else {
    echo "Không thêm được";
    // echo "
    //     <script>
    //     window.location = 'danh_sach_san_pham.php';
    //     </script>
    // ";
}
?>