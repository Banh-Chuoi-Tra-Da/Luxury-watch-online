<?php

require('connect.php');
$tennhacungcap=$_POST['tennhacungcap'];
$sql = "INSERT INTO `tbl_nha_cung_cap` (`tennhacungcap`) 
VALUES ('". $tennhacungcap ."')";
// echo $sql;



if ($con->query($sql)) {
    echo "Thêm mới thành công";
    echo "
        <script>
        window.location = 'danh_sach_nha_cung_cap.php';
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