<?php require('connect.php');
$sp_chi_tiet = $_GET['id'];
$soluong_them = 1;
$sql_sp = "SELECT * FROM `san_pham` as sp JOIN nhacungcap as ncc on sp.manhacungcap=ncc.manhacungcap JOIN sp_theo_gt ON sp.ma_sp_theo_gt=sp_theo_gt.ma_sp_theo_gt 
ORDER BY sp.masanpham ASC; ";
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

for ($sp_hien_thi = 0; $sp_hien_thi < count($masanpham); $sp_hien_thi++) {
    if ($masanpham[$sp_hien_thi] == $sp_chi_tiet) {
        break;
    }
}
//loai sp
$sql_sp_theo_gt = "SELECT * FROM `sp_theo_gt`";

$data_sp_theo_gt = $con->query($sql_sp_theo_gt);

while ($row_sp_theo_gt = $data_sp_theo_gt->fetch_assoc()) {
    $ma_sp_theo_gt_full[]=$row_sp_theo_gt['ma_sp_theo_gt'];
    $ten_sp_theo_gt_full[]=$row_sp_theo_gt['ten_sp_theo_gt'];
}
//ncc
$sql_ncc = "SELECT * FROM `nhacungcap`";

$data_ncc = $con->query($sql_ncc);

while ($row_ncc = $data_ncc->fetch_assoc()) {
    $ma_ncc_full[]=$row_ncc['manhacungcap'];
    $ten_ncc_full[]=$row_ncc['tennhacungcap'];
}
//
$sql_lh = "SELECT * FROM `loai_san_pham`";

$data_lh = $con->query($sql_lh);

while ($row_lh = $data_lh->fetch_assoc()) {
    $ma_lh_full[]=$row_lh['maloaisanpham'];
    $ten_lh_full[]=$row_lh['tenloaisanpham'];
}

// hien thi tat ca binh luan
// $sql_binh_luan = "SELECT * FROM `binh_luan` WHERE masanpham=$masanpham[$sp_hien_thi] and email='kiethuyha1192k2@gmail.com'";
$sql_binh_luan = "SELECT * FROM `binh_luan` as bl JOIN nguoidung as nd on bl.email=nd.email 
JOIN san_pham as sp on bl.masanpham=sp.masanpham  WHERE bl.masanpham=$masanpham[$sp_hien_thi] ORDER BY id_binh_luan DESC ";
$data_bl = $con->query($sql_binh_luan);
if($data_bl->num_rows>0){
    while ($row_bl = $data_bl->fetch_assoc()) {
        $id_binh_luan[]=$row_bl['id_binh_luan'];
        $noi_dung_binh_luan[]=$row_bl['noi_dung_binh_luan'];
        $masanpham_bl[]=$row_bl['masanpham'];
        $email_bl[]=$row_bl['email'];
        $tennguoidung[]=$row_bl['tennguoidung'];
    }
    $so_bl = count($id_binh_luan);
}
else{
    $so_bl = 0;
}
//ko cho binh luan lan 2
$sql_dbl = " SELECT * FROM `binh_luan` WHERE masanpham=$sp_chi_tiet and email='hhhh@gmail.com'; ";
$data_dbl = $con->query($sql_dbl);
if($data_dbl->num_rows>0){
    $da_binh_luan = true;
}
else{
    $da_binh_luan = false;
}