<?php
// ob_start();

try {
    session_start();
    if (empty($_GET['id'])) {
        throw new Exception("không tồn tại id");
    }
    // unset $_SESSION['gio_hang'];

    $id = $_GET['id'];
    if (empty($_SESSION['gio_hang'][$id])) {
        require('connect.php');
        $sql = "SELECT * from tbl_san_pham where masanpham = " . $id;

        $san_pham = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($san_pham);
        $_SESSION['gio_hang'][$id]['tensanpham']=$row['tensanpham'];
        $_SESSION['gio_hang'][$id]['gia_ban']=$row['dongia'];
        $_SESSION['gio_hang'][$id]['anh']=$row['anh'];
        $_SESSION['gio_hang'][$id]['soluongmua']=1;
        // $_SESSION['gio_hang'][$id] = array(
        //     // 'ma' => $row['id'],
        //     'tensanpham' => $row['tensanpham'],
        //     'gia_ban' => $row['dongia'],
        //     'anh' => $row['anh'],
        //     'soluongmua' => 1

        // );
    } else {
        $_SESSION['gio_hang'][$id]['soluongmua']++;
    }
    // print_r($_SESSION['gio_hang']);
    echo 1;
} catch (Throwable $e) {
    echo $e->getMessage();
}
