<?php 
// session_start();
require('connect.php');
$sp_chi_tiet = $_GET['id'];
// $soluong_them = 1;
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

$sql_ncc = "SELECT * FROM `tbl_nha_cung_cap`";


$data_ncc = $con->query($sql_ncc);

while ($row_ncc = $data_ncc->fetch_assoc()) {
    $ma_ncc_full[]=$row_ncc['manhacungcap'];
    $ten_ncc_full[]=$row_ncc['tennhacungcap'];
}
//
$sql_lh = "SELECT * FROM `tbl_loai_san_pham`";

$data_lh = $con->query($sql_lh);

while ($row_lh = $data_lh->fetch_assoc()) {
    $ma_lh_full[]=$row_lh['maloaisanpham'];
    $ten_lh_full[]=$row_lh['tenloaisanpham'];
}

// hien thi tat ca binh luan JOIN `tbl_nguoi_dung` as nd on bl.email=nd.email
$sql_binh_luan = "SELECT * FROM `tbl_binh_luan` as bl  
JOIN `tbl_san_pham` as sp on bl.masanpham=sp.masanpham  WHERE bl.masanpham=$masanpham[$sp_hien_thi] ORDER BY id_binh_luan DESC ";

$data_bl = $con->query($sql_binh_luan);
if($data_bl->num_rows>0){
    while ($row_bl = $data_bl->fetch_assoc()) {
        $id_binh_luan[]=$row_bl['id_binh_luan'];
        $noi_dung_binh_luan[]=$row_bl['noi_dung_binh_luan'];
        $masanpham_bl[]=$row_bl['masanpham'];
        $email_bl[]=$row_bl['email'];
        // $tennguoidung[]=$row_bl['tennguoidung'];
    }
    $so_bl = count($id_binh_luan);
}
else{
    $so_bl = 0;
}
//
if (isset($_SESSION['login'])) {
    $email=$_SESSION['login']['email'];
    $sql_dmh = " SELECT mat_hang_id, nguoi_dung_id,email FROM `tbl_chi_tiet_hoa_don` as ct 
    JOIN tbl_hoa_don as hd ON ct.id= hd.id JOIN tbl_nguoi_dung as nd ON hd.nguoi_dung_id=nd.id WHERE email='$email' and mat_hang_id=$masanpham[$sp_hien_thi] ; ";
    $data_dmh = $con->query($sql_dmh);
    if ($data_dmh->num_rows > 0) {
        $cho_binh_luan = true;
        $data_bl_mh = $data_dmh->fetch_assoc();
    }
    else {
        $cho_binh_luan = false;
    }
}

//ko cho binh luan lan 2

if (isset($_SESSION['login'])) {
    // $email=$_SESSION['login']['email'];
    // $email=$_SESSION['email'];
    $sql_dbl = " SELECT * FROM `tbl_binh_luan` WHERE masanpham=$sp_chi_tiet and email='$email'; ";
    $data_dbl = $con->query($sql_dbl);
    if ($data_dbl->num_rows > 0) {
        $da_binh_luan = true;
        $data_bl_sua = $data_dbl->fetch_assoc();
    }
    else {
        $da_binh_luan = false;
    }

}
