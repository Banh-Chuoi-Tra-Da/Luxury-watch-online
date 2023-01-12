<?php

require('connect.php');
$sql_sp = "SELECT * FROM `tbl_san_pham` as sp JOIN `tbl_nha_cung_cap` as ncc 
on sp.manhacungcap=ncc.manhacungcap JOIN sp_theo_gt ON sp.ma_sp_theo_gt=sp_theo_gt.ma_sp_theo_gt 
ORDER BY sp.masanpham ASC ";
$masanpham =[];
$tensanpham =[];
$maloaisanpham =[];
$soluong = [];
$dongia = [];
$mota=[];
$anh=[] ;
$anh1=[];
$anh2=[] ;

$manhacungcap=[];
$tennhacungcap=[];
$ma_sp_theo_gt=[];
$ten_sp_theo_gt=[];
$data = $con->query($sql_sp);
while ($row = $data->fetch_assoc()) {
    $masanpham[] = $row['masanpham'];
    $tensanpham[] =$row['tensanpham'];
    $maloaisanpham[] = $row['maloaisanpham'];
    $soluong[] =$row['soluong'];
    $dongia[] =$row['dongia'];
    $anh[] =$row['anh'];
    $anh1[] =$row['anh1'];
    $anh2[] =$row['anh2'];
    $mota[]=$row['mota'];
    $manhacungcap[]=$row['manhacungcap'];
    $tennhacungcap[]=$row['tennhacungcap'];
    $ma_sp_theo_gt[]=$row['ma_sp_theo_gt'];
    $ten_sp_theo_gt[]=$row['ten_sp_theo_gt'];
}

//theo tuổi
$sql_sp_theo_gt = "SELECT * FROM `sp_theo_gt`";

$data_sp_theo_gt = $con->query($sql_sp_theo_gt);

while ($row_sp_theo_gt = $data_sp_theo_gt->fetch_assoc()) {
    $ma_sp_theo_gt_full[]=$row_sp_theo_gt['ma_sp_theo_gt'];
    $ten_sp_theo_gt_full[]=$row_sp_theo_gt['ten_sp_theo_gt'];
}

//hãng

$sql_ncc = "SELECT * FROM `tbl_nha_cung_cap`";


$data_ncc = $con->query($sql_ncc);

while ($row_ncc = $data_ncc->fetch_assoc()) {
    $ma_ncc_full[]=$row_ncc['manhacungcap'];
    $ten_ncc_full[]=$row_ncc['tennhacungcap'];
}
//loai sp
$sql_lh = "SELECT * FROM `tbl_loai_san_pham`";

$data_lh = $con->query($sql_lh);

while ($row_lh = $data_lh->fetch_assoc()) {
    $ma_lh_full[]=$row_lh['maloaisanpham'];
    $ten_lh_full[]=$row_lh['tenloaisanpham'];
}



?>